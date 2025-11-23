<x-user_layout>
    <x-first_time_popup/>

    <div class="max-w-4xl mx-auto animate-[fadeInUp_0.5s_ease-out]">
        <div class="mb-10">
            <h1 class="text-3xl font-extrabold text-slate-900 font-heading">Account Settings</h1>
            <p class="text-slate-500 mt-2">Manage your profile information, security, and preferences.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <div class="bg-white p-6 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-primary/30 transition-all group">
                <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-2xl">person</span>
                </div>
                <h3 class="text-lg font-bold text-slate-800">Personal Profile</h3>
                <p class="text-sm text-slate-500 mt-1 mb-6">Update your name, college information, and contact details.</p>
                <button class="w-full py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 hover:text-brand-primary transition-colors flex items-center justify-center gap-2">
                    Edit Profile <i class="fas fa-arrow-right text-xs"></i>
                </button>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-primary/30 transition-all group">
                <div class="w-12 h-12 bg-green-50 text-green-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-2xl">lock</span>
                </div>
                <h3 class="text-lg font-bold text-slate-800">Security & Password</h3>
                <p class="text-sm text-slate-500 mt-1 mb-6">Change your password and manage 2FA settings.</p>
                <button class="w-full py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 hover:text-brand-primary transition-colors flex items-center justify-center gap-2">
                    Manage Security <i class="fas fa-arrow-right text-xs"></i>
                </button>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-primary/30 transition-all group">
                <div class="w-12 h-12 bg-purple-50 text-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-2xl">notifications</span>
                </div>
                <h3 class="text-lg font-bold text-slate-800">Notifications</h3>
                <p class="text-sm text-slate-500 mt-1 mb-6">Choose how you want to be updated about your submissions.</p>
                <button class="w-full py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 hover:text-brand-primary transition-colors flex items-center justify-center gap-2">
                    Configure <i class="fas fa-arrow-right text-xs"></i>
                </button>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 hover:border-brand-primary/30 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                    <span class="material-symbols-outlined text-2xl">tune</span>
                </div>
                <h3 class="text-lg font-bold text-slate-800">Preferences</h3>
                <p class="text-sm text-slate-500 mt-1 mb-6">Theme settings and accessibility options.</p>
                <button class="w-full py-2.5 rounded-lg border border-slate-200 text-slate-600 font-bold text-sm hover:bg-slate-50 hover:text-brand-primary transition-colors flex items-center justify-center gap-2">
                    Customize <i class="fas fa-arrow-right text-xs"></i>
                </button>
            </div>

        </div>
        
        <div class="mt-12 p-6 bg-red-50 rounded-2xl border border-red-100 flex items-center justify-between">
            <div>
                <h4 class="text-red-800 font-bold">Danger Zone</h4>
                <p class="text-red-600/70 text-sm">Permanently delete your account and all data.</p>
            </div>
            <button class="px-4 py-2 bg-white border border-red-200 text-red-600 font-bold text-sm rounded-lg hover:bg-red-600 hover:text-white transition-all">
                Delete Account
            </button>
        </div>
    </div>
</x-user_layout>