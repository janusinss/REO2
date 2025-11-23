<x-admin_layout>
    <div class="flex flex-col h-[calc(100vh-80px)]">
        
        <div class="flex justify-between items-center mb-4 px-1">
            <div>
                <h1 class="text-2xl font-bold text-slate-900 font-heading">Assessment Review</h1>
                <p class="text-slate-500 text-sm">Review submitted assessment forms.</p>
            </div>
            <a href="{{ route('admin.NewSubmissions') }}" class="text-sm font-bold text-slate-500 hover:text-brand-primary flex items-center gap-2">
                <span class="material-symbols-outlined">arrow_back</span> Back
            </a>
        </div>

        <div class="flex flex-1 gap-6 overflow-hidden">
            
            <div class="w-80 flex-shrink-0 bg-white rounded-xl border border-slate-200 shadow-sm flex flex-col overflow-hidden">
                <div class="p-4 bg-slate-50 border-b border-slate-200 font-bold text-slate-700 text-sm">
                    Files
                </div>
                <div class="overflow-y-auto flex-1 p-2 space-y-1">
                    <button class="w-full text-left p-3 rounded-lg bg-blue-50 border border-blue-200 flex items-start gap-3 transition-colors">
                        <i class="fas fa-file-word text-blue-600 text-lg mt-1"></i>
                        <div>
                            <p class="text-sm font-bold text-slate-800">Protocol Assessment</p>
                            <p class="text-xs text-slate-500">Uploaded 2h ago</p>
                        </div>
                    </button>
                    <button class="w-full text-left p-3 rounded-lg hover:bg-slate-50 border border-transparent hover:border-slate-200 flex items-start gap-3 transition-colors">
                        <i class="fas fa-file-word text-slate-400 text-lg mt-1"></i>
                        <div>
                            <p class="text-sm font-medium text-slate-700">Consent Form Checklist</p>
                            <p class="text-xs text-slate-400">Uploaded yesterday</p>
                        </div>
                    </button>
                </div>
            </div>

            <div class="flex-1 bg-slate-200 rounded-xl border border-slate-300 flex flex-col overflow-hidden relative">
                <div class="bg-white p-3 border-b border-slate-200 flex justify-between items-center shadow-sm z-10">
                    <span class="text-sm font-bold text-slate-700">Preview: Study_Protocol_Assessment.docx</span>
                    <div class="flex gap-2">
                        <button class="p-1.5 hover:bg-slate-100 rounded text-slate-600" title="Zoom Out"><i class="fas fa-minus"></i></button>
                        <button class="p-1.5 hover:bg-slate-100 rounded text-slate-600" title="Zoom In"><i class="fas fa-plus"></i></button>
                        <button class="ml-2 px-3 py-1.5 bg-brand-primary text-white text-xs font-bold rounded hover:bg-red-800 transition-colors">Download</button>
                    </div>
                </div>
                
                <div class="flex-1 bg-slate-100 overflow-auto flex justify-center p-8">
                    <div class="w-[21cm] min-h-[29.7cm] bg-white shadow-xl p-12 text-slate-800">
                        <div class="h-4 w-3/4 bg-slate-200 mb-6"></div>
                        <div class="h-4 w-full bg-slate-200 mb-2"></div>
                        <div class="h-4 w-full bg-slate-200 mb-2"></div>
                        <div class="h-4 w-2/3 bg-slate-200 mb-8"></div>
                        
                        <div class="h-32 w-full border-2 border-dashed border-slate-200 rounded-lg flex items-center justify-center text-slate-400 mb-8">
                            Document Preview Placeholder
                        </div>

                        <p class="text-center text-slate-400 text-sm italic">
                            (In a real implementation, use Google Docs Viewer or a JS PDF renderer here)
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin_layout>