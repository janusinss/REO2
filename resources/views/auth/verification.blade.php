<x-layout>
    <div class="min-h-screen flex items-center justify-center md:grid md:grid-cols-2 h-screen overflow-hidden bg-surface-50">
        
        <div class="hidden md:flex flex-col justify-center items-start p-16 relative h-full text-white overflow-hidden bg-brand-dark">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/wmsu2.jpg') }}" class="w-full h-full object-cover opacity-30 scale-110 grayscale" alt="Campus">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-dark to-transparent"></div>
            </div>
            
            <div class="relative z-10 max-w-md space-y-6 animate-[fadeInUp_0.8s_ease-out]">
                <div class="w-12 h-12 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center border border-white/20">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h1 class="text-4xl font-extrabold font-heading">Verify Your <br> Identity</h1>
                <p class="text-base text-slate-300 leading-relaxed">
                    To ensure the security of research data, we need to verify your email address before granting access.
                </p>
            </div>
        </div>

        <div class="w-full h-full flex items-center justify-center p-8 md:p-16 bg-white relative">
            <div class="w-full max-w-sm space-y-8 text-center">
                
                <div class="mx-auto w-16 h-16 bg-red-50 text-brand-primary rounded-full flex items-center justify-center mb-6">
                    <span class="material-symbols-outlined text-3xl">mark_email_read</span>
                </div>

                <div>
                    <h2 class="text-2xl font-bold text-slate-900">Check your inbox</h2>
                    <p class="mt-2 text-sm text-slate-500">We sent a 6-digit code to <br> <strong class="text-slate-800">{{ auth()->user()->email ?? 'your email' }}</strong></p>
                </div>

                <form action="{{ route('verify.submit') }}" method="POST" class="mt-8 space-y-6">
                    @csrf
                    
                    <div>
                        <label for="code" class="sr-only">Verification Code</label>
                        <input type="text" name="code" id="code" maxlength="6" 
                            class="w-full text-center text-3xl font-bold tracking-[0.5em] py-4 border-b-2 border-slate-200 focus:border-brand-primary outline-none transition-colors placeholder-slate-300" 
                            placeholder="000000" autofocus>
                    </div>

                    <button type="submit" class="w-full bg-brand-primary hover:bg-red-800 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-red-900/20 transition-all transform active:scale-95">
                        Verify Account
                    </button>
                </form>

                <div class="text-sm text-slate-500">
                    Didn't receive the code? 
                    <form action="#" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-brand-primary font-bold hover:underline">Resend</button>
                    </form>
                </div>
                
                <div class="pt-8">
                    <a href="{{ route('logout') }}" class="text-xs text-slate-400 hover:text-slate-600 flex items-center justify-center gap-1">
                        <i class="fas fa-arrow-left"></i> Back to Login
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>