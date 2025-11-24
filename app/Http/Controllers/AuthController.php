<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            if($user->role === 'admin'){
                return redirect()->route('admin.analytics');
            }
            if($user->role === 'researcher'){
                return redirect()->route('home');
            }
            return redirect()->intended(route('home'));

            
            
        }

        return back()->withErrors([
            'email' => 'The provided credentials does not match our records.',
        ]);
    }


    public function showRegister()
    {
        return view('auth.register');
    }

    public function register_internal(Request $request)
    {
        // 1. Base Validation (Fields common to everyone)
        $rules = [
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'middle_name'=> 'nullable|string|max:255',
            'contact'    => 'required|string|max:20',
            'password'   => 'required|min:8|confirmed',
            'external_user' => 'required|boolean',
        ];

        // 2. Conditional Validation
        if ($request->external_user == '1') {
            // External User Rules
            $rules['email'] = 'required|email|unique:users,email';
            $rules['institute'] = 'required|string|max:255';
        } else {
            // WMSU User Rules
            $rules['email'] = [
                'required',
                'email',
                'unique:users,email',
                function ($attribute, $value, $fail) {
                    if (!str_ends_with($value, '@wmsu.edu.ph')) {
                        $fail('You must use a valid WMSU email address (@wmsu.edu.ph).');
                    }
                },
            ];
            $rules['college'] = 'required|string|max:255';
            $rules['department'] = 'required|string|max:255';
            $rules['course'] = 'required|string|max:255';
        }

        $validated = $request->validate($rules);

        // 3. Generate 6-Digit OTP
        $verificationCode = rand(100000, 999999);

        // 4. Create User
        $user = User::create([
            'first_name' => $validated['first_name'],
            'last_name'  => $validated['last_name'],
            'middle_name'=> $validated['middle_name'] ?? null,
            'email'      => $validated['email'],
            'contact'    => $validated['contact'],
            'password'   => Hash::make($validated['password']),
            'role'       => 'researcher',
            'external_user' => $validated['external_user'],
            
            // Store specific fields depending on type
            'institute'  => $request->external_user == '1' ? $validated['institute'] : null,
            'college'    => $request->external_user == '0' ? $validated['college'] : null,
            'department' => $request->external_user == '0' ? $validated['department'] : null,
            'course'     => $request->external_user == '0' ? $validated['course'] : null,
            
            // Verification Data
            'verification_code' => $verificationCode,
            'is_verified' => false,
        ]);

        // 5. Send Email
        try {
            Mail::to($user->email)->send(new VerifyEmail($verificationCode));
        } catch (\Exception $e) {
            // TEMPORARY: Kill the app and show the error on screen so we know what's wrong
            dd($e->getMessage()); 
        }

        // 6. Log them in instantly so we know who is verifying
        Auth::login($user);

        // 7. Redirect to Verification Page
        return redirect()->route('verify.show');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }   

    public function acceptTerms(Request $request)
{
    $user = Auth::user();
    $user->first_time = true;
    $user->save();

    return redirect()->route('instructions')->with('status', 'Thanks for accepting the terms!');
}

public function showVerifyForm()
    {
        // Ensure user is logged in but not verified
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        if (Auth::user()->is_verified) {
            return redirect()->route('home');
        }

        return view('auth.verification');
    }

public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|numeric|digits:6'
        ]);

        $user = Auth::user();

        if ($request->code == $user->verification_code) {
            // Success! Update status
            $user->is_verified = true;
            $user->verification_code = null; // Clear code for security
            $user->email_verified_at = now();
            $user->save();

            return redirect()->route('home')->with('success', 'Account verified successfully! Welcome to REO.');
        }

        return back()->withErrors(['code' => 'Invalid verification code. Please try again.']);
    }

    // Update Profile Logic
    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'college' => 'nullable|string|max:255',
            'department' => 'nullable|string|max:255',
            'institute' => 'nullable|string|max:255',
        ]);

        $user->update($data);

        return redirect()->route('settings')->with('success', 'Profile updated successfully.');
    }

    // Update Password Logic
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|current_password',
            'password' => 'required|min:8|confirmed',
        ]);

        Auth::user()->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('settings')->with('success', 'Password changed successfully.');
    }

    // Delete Account Logic
    public function deleteAccount(Request $request)
    {
        $request->validate([
            'password' => 'required|current_password',
        ]);

        $user = Auth::user();

        Auth::logout();
        
        if ($user->delete()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('index')->with('success', 'Your account has been successfully deleted.');
        }

        return back()->with('error', 'Failed to delete account. Please try again.');
    }
}