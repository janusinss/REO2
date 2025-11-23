<div id="notifications-panel" class="hidden absolute right-0 mt-4 w-80 sm:w-96 bg-white dark:bg-slate-900 rounded-2xl shadow-2xl ring-1 ring-black ring-opacity-5 z-50 overflow-hidden origin-top-right animate-[scaleIn_0.2s_ease-out]">
    
    <div class="px-4 py-3 border-b border-slate-100 dark:border-slate-700 flex justify-between items-center bg-slate-50 dark:bg-slate-800/50">
        <h3 class="text-sm font-bold text-slate-800 dark:text-white">Notifications</h3>
        <button class="text-xs font-semibold text-brand-primary hover:text-red-700 transition-colors">
            Mark all read
        </button>
    </div>

    <div class="max-h-96 overflow-y-auto">
        <div class="hidden flex flex-col items-center justify-center py-8 text-center">
            <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center mb-3">
                <span class="material-symbols-outlined text-slate-400 text-2xl">notifications_off</span>
            </div>
            <p class="text-sm text-slate-500 font-medium">No new notifications</p>
        </div>

        <a href="#" class="block px-4 py-3 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors border-l-4 border-brand-primary bg-red-50/30">
            <div class="flex gap-3">
                <div class="flex-shrink-0">
                    <div class="h-8 w-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">rate_review</span>
                    </div>
                </div>
                <div>
                    <p class="text-sm font-semibold text-slate-800 dark:text-slate-200">Protocol Returned</p>
                    <p class="text-xs text-slate-500 mt-0.5 line-clamp-2">Your submission "AI Ethics..." has been returned for revision.</p>
                    <p class="text-[10px] text-slate-400 mt-1 font-medium">2 mins ago</p>
                </div>
            </div>
        </a>

        <a href="#" class="block px-4 py-3 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors border-l-4 border-transparent">
            <div class="flex gap-3">
                <div class="flex-shrink-0">
                    <div class="h-8 w-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center">
                        <span class="material-symbols-outlined text-sm">check_circle</span>
                    </div>
                </div>
                <div>
                    <p class="text-sm font-semibold text-slate-800 dark:text-slate-200">Submission Approved</p>
                    <p class="text-xs text-slate-500 mt-0.5 line-clamp-2">Admin has approved your initial document upload.</p>
                    <p class="text-[10px] text-slate-400 mt-1 font-medium">1 hour ago</p>
                </div>
            </div>
        </a>
    </div>

    <a href="#" class="block bg-slate-50 dark:bg-slate-800 px-4 py-3 text-center text-xs font-bold text-slate-600 hover:text-brand-primary hover:bg-slate-100 transition-colors border-t border-slate-100">
        View All Activity
    </a>
</div>