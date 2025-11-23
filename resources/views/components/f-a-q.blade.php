<div class="faq-modal hidden fixed inset-0 z-[80] flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm transition-opacity">
    <div class="bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-full max-w-3xl overflow-hidden flex flex-col max-h-[85vh] animate-[scaleIn_0.2s_ease-out]">
        
        <div class="bg-brand-primary p-8 pb-12 relative overflow-hidden">
            <div class="absolute top-0 right-0 p-4 opacity-10">
                <i class="fas fa-question-circle text-9xl text-white"></i>
            </div>
            <div class="relative z-10">
                <h2 class="text-3xl font-extrabold text-white font-heading">Help Center</h2>
                <p class="text-red-100 mt-2">Frequently asked questions about the research submission process.</p>
            </div>
            <button onclick="closeHelpModal()" class="absolute top-6 right-6 text-white/70 hover:text-white transition-colors">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>
        </div>

        <div class="px-8 -mt-6 relative z-20">
            <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg p-2 flex items-center border border-slate-100 dark:border-slate-700">
                <span class="material-symbols-outlined text-slate-400 ml-3">search</span>
                <input type="text" placeholder="Search for keywords..." class="w-full p-3 outline-none text-slate-700 dark:text-slate-200 bg-transparent">
            </div>
        </div>

        <div class="p-8 overflow-y-auto space-y-4">
            
            <details class="group bg-slate-50 dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between p-5 text-slate-800 dark:text-white font-bold hover:bg-slate-100 dark:hover:bg-slate-700/50 transition-colors">
                    <span>What documents are required for initial submission?</span>
                    <span class="transition group-open:rotate-180">
                        <i class="fas fa-chevron-down text-brand-primary"></i>
                    </span>
                </summary>
                <div class="px-5 pb-5 text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-200 dark:border-slate-700 pt-4">
                    You typically need the Application Form (FR.002), Research Protocol, and Informed Consent forms. Please check the "Resources" tab for the complete checklist.
                </div>
            </details>

            <details class="group bg-slate-50 dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between p-5 text-slate-800 dark:text-white font-bold hover:bg-slate-100 dark:hover:bg-slate-700/50 transition-colors">
                    <span>How long does the review process take?</span>
                    <span class="transition group-open:rotate-180">
                        <i class="fas fa-chevron-down text-brand-primary"></i>
                    </span>
                </summary>
                <div class="px-5 pb-5 text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-200 dark:border-slate-700 pt-4">
                    Timelines vary by review type. <strong>Exempt</strong> reviews take 1-2 weeks, while <strong>Full Board</strong> reviews may take 4-6 weeks depending on the meeting schedule.
                </div>
            </details>

            <details class="group bg-slate-50 dark:bg-slate-800 rounded-xl border border-slate-200 dark:border-slate-700 overflow-hidden [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between p-5 text-slate-800 dark:text-white font-bold hover:bg-slate-100 dark:hover:bg-slate-700/50 transition-colors">
                    <span>Can I edit my submission after uploading?</span>
                    <span class="transition group-open:rotate-180">
                        <i class="fas fa-chevron-down text-brand-primary"></i>
                    </span>
                </summary>
                <div class="px-5 pb-5 text-sm text-slate-600 dark:text-slate-300 leading-relaxed border-t border-slate-200 dark:border-slate-700 pt-4">
                    Yes, but only if the status is still "Pending". Once it is "Under Review", you must wait for the revision request from the admin.
                </div>
            </details>

        </div>

        <div class="p-6 border-t border-slate-100 bg-slate-50 dark:bg-slate-800 flex justify-between items-center">
            <p class="text-xs text-slate-500">Still stuck? Contact <a href="#" class="text-brand-primary font-bold hover:underline">reo@wmsu.edu.ph</a></p>
            <button onclick="closeHelpModal()" class="bg-slate-900 text-white px-6 py-2 rounded-lg font-bold text-sm hover:bg-brand-primary transition-colors">Got it</button>
        </div>
    </div>
</div>