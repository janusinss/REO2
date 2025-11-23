<x-layout>
    <div class="min-h-screen flex items-center justify-center md:grid md:grid-cols-2 h-screen overflow-hidden bg-surface-50">
        
        <div class="hidden md:flex flex-col justify-center items-start p-16 relative h-full text-white overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/wmsu1.jpg') }}" class="w-full h-full object-cover opacity-40 scale-110" alt="Campus">
                <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/90 to-brand-dark/90 mix-blend-multiply"></div>
            </div>
            
            <div class="relative z-10 max-w-md space-y-6 animate-[fadeInUp_0.8s_ease-out]">
                <div class="w-16 h-16 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center border border-white/20 shadow-2xl">
                    <img src="{{ asset('images/reoc-nobg.png') }}" class="w-10 h-10 drop-shadow-md">
                </div>
                <h1 class="text-5xl font-extrabold tracking-tight leading-tight font-heading">
                    Research <br> <span class="text-red-200">Excellence.</span>
                </h1>
                <p class="text-lg text-red-100 leading-relaxed">
                    Access the WMSU Research Ethics Office portal to manage your protocols, track submissions, and collaborate with peers.
                </p>
            </div>

            <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/4 right-10 w-32 h-32 bg-red-500/30 rounded-full blur-2xl mix-blend-screen"></div>
        </div>

        <div class="w-full h-full flex items-center justify-center p-8 md:p-16 bg-white relative">
            <div class="w-full max-w-md space-y-8">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl font-bold text-slate-900">Welcome Back</h2>
                    <p class="mt-2 text-sm text-slate-500">Please enter your details to sign in.</p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-6 mt-8">
                    @csrf
                    
                    <div class="space-y-2">
                        <label for="email" class="text-xs font-bold text-slate-500 uppercase tracking-wider">Email Address</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input id="email" type="email" name="email" required autofocus 
                                class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-primary focus:border-brand-primary transition-all outline-none text-slate-800 placeholder-slate-400 shadow-sm hover:bg-white"
                                placeholder="name@wmsu.edu.ph">
                        </div>
                        @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label for="password" class="text-xs font-bold text-slate-500 uppercase tracking-wider">Password</label>
                            <a href="#" class="text-xs text-brand-primary font-semibold hover:underline">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input id="password" type="password" name="password" required 
                                class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-primary focus:border-brand-primary transition-all outline-none text-slate-800 placeholder-slate-400 shadow-sm hover:bg-white"
                                placeholder="••••••••">
                        </div>
                        @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="w-full bg-brand-primary hover:bg-red-800 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-red-900/20 hover:-translate-y-0.5 transition-all duration-200 flex justify-center items-center gap-2 group">
                        <span>Sign In</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </button>
                </form>

                <div class="relative">
                    <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-slate-200"></div></div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-slate-500">New to REO?</span>
                    </div>
                </div>

                <div class="text-center">
                    <a href="{{ route('register') }}" class="text-brand-primary font-bold hover:underline">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>