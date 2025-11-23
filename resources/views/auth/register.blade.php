<x-layout>
    <div class="min-h-screen py-20 px-4 flex items-center justify-center bg-surface-50 relative overflow-hidden">
        
        <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-brand-dark to-brand-primary z-0"></div>
        <div class="absolute top-20 left-20 w-72 h-72 bg-white/10 rounded-full blur-3xl z-0"></div>

        <div class="w-full max-w-4xl relative z-10">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row">
                
                <div class="md:w-1/3 bg-slate-900 text-white p-10 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                    
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Join the Community</h3>
                        <p class="text-slate-400 text-sm leading-relaxed">Create your researcher profile to start submitting protocols and accessing resources.</p>
                    </div>

                    <div class="space-y-6 mt-12">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-brand-primary flex items-center justify-center shrink-0">
                                <i class="fas fa-rocket text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm">Fast Submission</h4>
                                <p class="text-xs text-slate-400">Streamlined protocol uploads</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-brand-primary flex items-center justify-center shrink-0">
                                <i class="fas fa-robot text-white text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-sm">AI Pre-Screening</h4>
                                <p class="text-xs text-slate-400">Instant compliance checks</p>
                            </div>
                        </div>
                    </div>

                    <p class="text-xs text-slate-500 mt-12">© 2025 WMSU REO</p>
                </div>

                <div class="md:w-2/3 p-10 md:p-12">
                    <h2 class="text-2xl font-bold text-slate-800 mb-8">Create Account</h2>
                    
                    <form method="POST" action="{{ route('register.internal') }}" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase">First Name</label>
                                <input type="text" name="first_name" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none transition-all" placeholder="John">
                            </div>
                            
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase">Last Name</label>
                                <input type="text" name="last_name" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none transition-all" placeholder="Doe">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 uppercase">Email Address</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none transition-all" placeholder="john.doe@wmsu.edu.ph">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase">Password</label>
                                <input type="password" name="password" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none transition-all" placeholder="••••••••">
                            </div>
                            
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 uppercase">Confirm Password</label>
                                <input type="password" name="password_confirmation" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none transition-all" placeholder="••••••••">
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full bg-brand-primary text-white font-bold py-4 rounded-xl shadow-lg shadow-red-900/20 hover:bg-red-800 hover:-translate-y-1 transition-all duration-200">
                                Complete Registration
                            </button>
                        </div>

                        <p class="text-center text-sm text-slate-500 mt-4">
                            Already have an account? <a href="{{ route('login') }}" class="text-brand-primary font-bold hover:underline">Log in</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>