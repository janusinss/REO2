<x-admin_layout>
    <x-slot name="title">Protocol Review: {{ $researchTitle->reoc_code ?? 'New Submission' }}</x-slot>

    <div class="flex h-[calc(100vh-140px)] gap-6">
        
        <div class="w-2/3 bg-slate-900 rounded-2xl overflow-hidden shadow-2xl flex flex-col">
            <div class="bg-black/40 p-3 flex justify-between items-center text-white/80 backdrop-blur-md">
                <span class="text-sm font-mono"><i class="fas fa-file-pdf mr-2 text-red-400"></i> Research_Protocol_v1.pdf</span>
                <div class="flex gap-2">
                    <button class="hover:text-white"><i class="fas fa-download"></i></button>
                    <button class="hover:text-white"><i class="fas fa-expand"></i></button>
                </div>
            </div>
            <div class="flex-1 bg-slate-800 flex items-center justify-center text-slate-600">
                <div class="text-center">
                    <i class="fas fa-file-pdf text-6xl mb-4 opacity-20"></i>
                    <p>Document Preview</p>
                </div>
            </div>
        </div>

        <div class="w-1/3 flex flex-col gap-6 overflow-y-auto pr-1">
            
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-200">
                <h3 class="font-bold text-slate-800 text-lg mb-1">{{ $researchTitle->Study_Protocol_title }}</h3>
                <p class="text-sm text-slate-500 mb-4">{{ $researchTitle->author->first_name }} {{ $researchTitle->author->last_name }}</p>
                
                <div class="flex gap-2">
                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-lg text-xs font-bold uppercase">Expedited</span>
                    <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-lg text-xs font-bold uppercase">Pending Review</span>
                </div>
            </div>

            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-200 flex-1">
                <div class="mb-4 pb-4 border-b border-slate-100">
                    <h4 class="font-bold text-slate-800 text-sm">Assign Reviewers (SOP 05)</h4>
                    <p class="text-xs text-slate-500">Expedited review requires 2 Primary Reviewers.</p>
                </div>

                <form action="#" class="space-y-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-1">Primary Reviewer 1</label>
                        <select class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-[#8B0000]">
                            <option>Select Scientist...</option>
                            <option>Dr. Jose Rizal (Medical)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase mb-1">Primary Reviewer 2</label>
                        <select class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm outline-none focus:border-[#8B0000]">
                            <option>Select Member...</option>
                            <option>Ms. Maria Clara (Lay)</option>
                        </select>
                    </div>

                    <div class="pt-2">
                        <button class="w-full bg-[#8B0000] text-white font-bold py-3 rounded-xl shadow-lg shadow-red-900/20 hover:bg-red-900 transition-all">
                            Confirm Assignment
                        </button>
                        <p class="text-[10px] text-center text-slate-400 mt-2">Reviewers will be notified via email immediately.</p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-admin_layout>