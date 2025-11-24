<x-admin_layout>
    <x-slot name="title">Meeting Management (SOP 17-20)</x-slot>

    <div class="flex h-[calc(100vh-140px)] gap-6">
        
        <div class="w-1/3 flex flex-col gap-4">
            <div class="flex justify-between items-center">
                <h3 class="font-bold text-slate-800">Upcoming Sessions</h3>
                <button class="text-xs bg-slate-900 text-white px-3 py-1.5 rounded-lg hover:bg-slate-700">+ New Meeting</button>
            </div>

            <div class="space-y-3 overflow-y-auto flex-1 pr-2">
                <div class="bg-white p-5 rounded-xl border-l-4 border-[#8B0000] shadow-md cursor-pointer ring-2 ring-[#8B0000]/10">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-xs font-bold text-[#8B0000] bg-red-50 px-2 py-1 rounded">REGULAR</span>
                        <span class="text-xs text-slate-400">Nov 25, 2025</span>
                    </div>
                    <h4 class="font-bold text-slate-800 text-lg">November Board Review</h4>
                    <p class="text-xs text-slate-500 mt-1 mb-4">Conference Room A • 9:00 AM</p>
                    
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <div class="flex -space-x-2">
                            <div class="w-6 h-6 rounded-full bg-slate-200 border-2 border-white"></div>
                            <div class="w-6 h-6 rounded-full bg-slate-300 border-2 border-white"></div>
                            <div class="w-6 h-6 rounded-full bg-slate-400 border-2 border-white flex items-center justify-center text-[8px] text-white font-bold">+3</div>
                        </div>
                        <span class="text-xs font-bold text-slate-600">5 Protocols</span>
                    </div>
                </div>

                <div class="bg-slate-50 p-5 rounded-xl border border-slate-200 shadow-sm hover:bg-white transition-colors cursor-pointer">
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-xs font-bold text-slate-500 bg-slate-200 px-2 py-1 rounded">SPECIAL</span>
                        <span class="text-xs text-slate-400">Dec 10, 2025</span>
                    </div>
                    <h4 class="font-bold text-slate-700 text-md">Yearend Assessment</h4>
                    <p class="text-xs text-slate-500 mt-1">Zoom Conference</p>
                </div>
            </div>
        </div>

        <div class="flex-1 bg-white rounded-2xl shadow-sm border border-slate-200 flex flex-col overflow-hidden">
            <div class="p-6 border-b border-slate-200 bg-slate-50 flex justify-between items-center">
                <div>
                    <h3 class="font-bold text-slate-800 text-lg">Agenda: November Board Review</h3>
                    <p class="text-xs text-slate-500">SOP 18: Agenda must be finalized 5 days prior.</p>
                </div>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-white border border-slate-300 text-slate-600 text-xs font-bold rounded-lg hover:bg-slate-50">Print PDF</button>
                    <button class="px-4 py-2 bg-[#8B0000] text-white text-xs font-bold rounded-lg hover:bg-red-900">Finalize & Notify</button>
                </div>
            </div>

            <div class="flex-1 p-6 overflow-y-auto bg-slate-100/50 space-y-6">
                
                <div>
                    <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">5.1 Full Review Protocols</h4>
                    <div class="space-y-2">
                        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex items-center justify-between group hover:border-[#8B0000] transition-colors">
                            <div class="flex items-center gap-4">
                                <span class="font-mono text-xs font-bold text-slate-400">2025-042</span>
                                <div>
                                    <p class="font-bold text-slate-800 text-sm">Impact of AI on Rural Education</p>
                                    <p class="text-xs text-slate-500">Primary Reviewer: Dr. Jose Rizal</p>
                                </div>
                            </div>
                            <button class="text-slate-400 hover:text-red-500 opacity-0 group-hover:opacity-100"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <button class="w-full py-3 border-2 border-dashed border-slate-300 rounded-xl text-slate-400 text-sm font-bold mt-2 hover:border-slate-400 hover:text-slate-500 transition-colors">
                        + Add Protocol to Agenda
                    </button>
                </div>

                <div>
                    <h4 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-3">7. Other Matters / Reports</h4>
                    <div class="space-y-2">
                        <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm">
                            <p class="font-bold text-slate-800 text-sm">Report on SAE (Serious Adverse Events) - Protocol 2024-011</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-admin_layout>