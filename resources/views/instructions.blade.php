<x-user_layout>
    <div class="max-w-4xl mx-auto py-12 px-4 sm:px-6 animate-[fadeInUp_0.5s_ease-out]">
        
        <div class="text-center mb-12">
            <h1 class="text-3xl font-extrabold text-slate-900 font-heading">Submission Roadmap</h1>
            <p class="text-slate-500 mt-2">Follow these steps to ensure a smooth ethics review process.</p>
        </div>

        <div class="relative">
            <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-slate-200"></div>

            <div class="relative flex gap-8 mb-12 group">
                <div class="w-16 h-16 bg-white border-4 border-brand-primary rounded-full flex items-center justify-center z-10 shrink-0 shadow-lg">
                    <span class="text-2xl font-bold text-brand-primary">1</span>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-md border border-slate-100 flex-1 group-hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Download Resources</h3>
                    <p class="text-slate-600 mb-4">Get copies of the Application Form and applicable Assessment Forms from our library.</p>
                    <a href="{{ route('resources') }}" class="inline-flex items-center gap-2 text-xs font-bold text-brand-primary bg-red-50 px-3 py-1.5 rounded-lg hover:bg-red-100 transition-colors">
                        <span class="material-symbols-outlined text-base">source</span> Go to Resources
                    </a>
                </div>
            </div>

            <div class="relative flex gap-8 mb-12 group">
                <div class="w-16 h-16 bg-white border-4 border-slate-300 group-hover:border-brand-primary rounded-full flex items-center justify-center z-10 shrink-0 shadow-sm transition-colors">
                    <span class="text-2xl font-bold text-slate-400 group-hover:text-brand-primary transition-colors">2</span>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-md border border-slate-100 flex-1 group-hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Prepare Documents</h3>
                    <p class="text-slate-600 mb-4">Ensure all files are PDF (unless specified) and formatted correctly.</p>
                    <div class="bg-slate-50 p-4 rounded-xl border border-slate-200">
                        <ul class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm text-slate-600">
                            <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Application Form (Signed)</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Research Protocol (Line #s)</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Technical Clearance</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Consent Forms</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> CV of Researcher/s</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check text-green-500"></i> Assessment Forms (Word)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="relative flex gap-8 mb-12 group">
                <div class="w-16 h-16 bg-white border-4 border-slate-300 group-hover:border-brand-primary rounded-full flex items-center justify-center z-10 shrink-0 shadow-sm transition-colors">
                    <span class="text-2xl font-bold text-slate-400 group-hover:text-brand-primary transition-colors">3</span>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-md border border-slate-100 flex-1 group-hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Upload Submission</h3>
                    <p class="text-slate-600 mb-4">Upload your complied files to the portal. Our AI will pre-screen for formatting errors.</p>
                    <a href="{{ route('submit') }}" class="inline-flex items-center gap-2 text-xs font-bold text-white bg-brand-primary px-4 py-2 rounded-lg hover:bg-red-800 transition-all shadow-lg shadow-red-900/20">
                        <span class="material-symbols-outlined text-base">upload_file</span> Start Submission
                    </a>
                </div>
            </div>

            <div class="relative flex gap-8 mb-12 group">
                <div class="w-16 h-16 bg-white border-4 border-slate-300 group-hover:border-brand-primary rounded-full flex items-center justify-center z-10 shrink-0 shadow-sm transition-colors">
                    <span class="text-2xl font-bold text-slate-400 group-hover:text-brand-primary transition-colors">4</span>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-md border border-slate-100 flex-1 group-hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Payment & Hard Copies</h3>
                    <p class="text-slate-600 leading-relaxed">
                        1. Secure a Payment Slip from the REO Office and pay at the University Cashier.<br>
                        2. Submit hard copies in an <strong class="text-brand-primary">expanded long envelope</strong> (color-coded by college) with the Official Receipt.
                    </p>
                </div>
            </div>

            <div class="relative flex gap-8 group">
                <div class="w-16 h-16 bg-green-100 border-4 border-green-500 rounded-full flex items-center justify-center z-10 shrink-0 shadow-lg">
                    <span class="material-symbols-outlined text-3xl text-green-600">flag</span>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-md border border-slate-100 flex-1 group-hover:shadow-lg transition-all">
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Wait for Review</h3>
                    <p class="text-slate-600">Monitor your dashboard for status updates. You will be notified if an appointment is needed.</p>
                </div>
            </div>

        </div>
    </div>
</x-user_layout>