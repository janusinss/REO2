<div class="profile-modal hidden fixed inset-0 z-[60] flex items-center justify-center bg-black/60 backdrop-blur-sm p-4 transition-opacity">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden animate-[scaleIn_0.2s_ease-out] flex flex-col max-h-[90vh]">
        
        <div class="bg-brand-dark p-6 pb-12 relative">
            <button onclick="closeProfModal()" class="absolute top-4 right-4 text-white/50 hover:text-white transition-colors">
                <span class="material-symbols-outlined">close</span>
            </button>
            <h2 class="text-2xl font-bold text-white font-heading">My Profile</h2>
            <p class="text-white/60 text-sm mt-1">Your personal researcher details.</p>
        </div>

        <div class="px-6 -mt-10 mb-6 relative z-10">
            <div class="w-20 h-20 rounded-2xl bg-brand-primary text-white text-3xl font-bold flex items-center justify-center border-4 border-white shadow-md">
                {{ substr(Auth::user()->first_name, 0, 1) }}
            </div>
        </div>

        <div class="p-6 pt-0 overflow-y-auto space-y-5">
            <div class="grid grid-cols-1 gap-5">
                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Full Name</label>
                    <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 font-medium">
                        {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Email Address</label>
                    <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 font-medium">
                        {{ Auth::user()->email }}
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Role</label>
                        <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 font-medium">
                            {{ ucfirst(Auth::user()->role) }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Department</label>
                        <div class="p-3 bg-slate-50 border border-slate-200 rounded-xl text-slate-800 font-medium">
                            {{ Auth::user()->department ?? 'N/A' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 border-t border-slate-100 bg-slate-50 flex justify-between items-center">
            <span class="text-xs text-slate-400">User ID: #{{ Auth::id() }}</span>
            <div class="flex gap-3">
                <button onclick="closeProfModal()" class="px-4 py-2 text-slate-500 font-bold hover:text-slate-800 transition-colors">Close</button>
                <a href="{{ route('settings') }}" class="px-5 py-2 bg-white border border-slate-200 text-slate-700 font-bold rounded-xl hover:bg-slate-100 hover:border-slate-300 transition-all shadow-sm">
                    Edit Settings
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    function openProfModal() { document.querySelector('.profile-modal').classList.remove('hidden'); }
    function closeProfModal() { document.querySelector('.profile-modal').classList.add('hidden'); }
</script>