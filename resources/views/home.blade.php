<x-user_layout>
    <x-first_time_popup/>
    
    <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10">
            <div>
                <h2 class="text-3xl font-bold text-slate-800 dark:text-white tracking-tight">
                    My Submissions
                </h2>
                <p class="text-slate-500 dark:text-slate-400 mt-1">Track and manage your research protocols.</p>
            </div>
            <button onclick="window.location.href='{{ route('submit') }}'" class="mt-4 md:mt-0 bg-brand-primary text-white px-5 py-2.5 rounded-lg font-semibold shadow-lg shadow-red-900/20 hover:bg-red-800 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-xl">add</span> New Submission
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8 title_wrapper">
            @forelse($researchTitles as $title)
            <div class="group bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full overflow-hidden relative">
                
                <div class="absolute left-0 top-0 bottom-0 w-1.5 
                    {{ $title->Status === 'Pending' ? 'bg-yellow-400' : 
                       ($title->Status === 'Approved' ? 'bg-green-500' : 'bg-brand-primary') }}">
                </div>

                <div class="p-6 flex-grow flex flex-col">
                    <div class="flex justify-between items-start mb-4 pl-3">
                        <span class="text-xs font-semibold uppercase tracking-wider text-slate-400">
                            {{ $title->created_at->format('M d, Y') }}
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold
                            {{ $title->Status === 'Pending' ? 'bg-yellow-50 text-yellow-700 border border-yellow-200' : 
                               ($title->Status === 'Initial Review' ? 'bg-blue-50 text-blue-700 border border-blue-200' : 'bg-gray-100 text-gray-600') }}">
                            <span class="w-1.5 h-1.5 rounded-full {{ $title->Status === 'Pending' ? 'bg-yellow-500' : 'bg-blue-500' }}"></span>
                            {{ $title->Status }}
                        </span>
                    </div>

                    <div class="pl-3 mb-6">
                        <h3 class="text-xl font-bold text-slate-800 dark:text-white mb-3 line-clamp-2 leading-tight group-hover:text-brand-primary transition-colors">
                            {{ $title->Study_Protocol_title }}
                        </h3>
                        
                        <div class="space-y-2">
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300">
                                <span class="material-symbols-outlined text-lg text-slate-400">person</span>
                                <span>{{ $title->Adviser }}</span>
                            </div>
                            <div class="flex items-center gap-2 text-sm text-slate-600 dark:text-slate-300">
                                <span class="material-symbols-outlined text-lg text-slate-400">category</span>
                                <span>{{ $title->Research_Category }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-auto pt-6 border-t border-slate-100 dark:border-slate-700 flex gap-3 pl-3">
                        <button onclick="openDetailModal(
                            '{{ $title->Study_Protocol_title }}','{{ $title->Research_Category }}',
                            '{{ $title->Adviser }}','{{ $title->Status }}')"
                            class="flex-1 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-white font-semibold py-2.5 rounded-lg hover:bg-slate-200 dark:hover:bg-slate-600 transition-colors text-sm">
                            Details
                        </button>
                        <a href="{{ url('/home/' . $title->id . '/files') }}"
                            class="flex-1 bg-brand-primary/10 text-brand-primary font-semibold py-2.5 rounded-lg hover:bg-brand-primary hover:text-white transition-all text-center text-sm flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-base">folder</span> Files
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full flex flex-col items-center justify-center py-16 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                <div class="w-16 h-16 bg-slate-100 rounded-full flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-3xl text-slate-400">inbox</span>
                </div>
                <p class="text-lg font-semibold text-slate-600">No research titles submitted yet.</p>
                <button onclick="window.location.href='{{ route('submit') }}'" class="mt-4 text-brand-primary font-bold hover:underline">Start your first submission</button>
            </div>
            @endforelse
        </div>
    </main>

    <div class="fixed bottom-8 right-8 z-40">
        <button onclick="openHelpModal()" class="bg-brand-dark text-white rounded-full h-14 w-14 flex items-center justify-center shadow-2xl hover:scale-110 transition-transform border-2 border-white/20">
            <span class="material-symbols-outlined text-2xl">question_mark</span>
        </button>
    </div>
    
    <x-f-a-q />

    <div class="detail-modal hidden fixed inset-0 z-[100] flex items-center justify-center p-4">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity" onclick="closeModal('detail-modal')"></div>
        
        <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden animate-[scaleIn_0.3s_ease-out]">
            <div class="bg-brand-primary px-6 py-4 flex justify-between items-center">
                <h2 class="text-lg font-bold text-white flex items-center gap-2">
                    <span class="material-symbols-outlined">article</span> Submission Details
                </h2>
                <button onclick="closeModal('detail-modal')" class="text-white/80 hover:text-white hover:bg-white/20 rounded-full p-1 transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <div class="p-8 max-h-[70vh] overflow-y-auto">
                <div class="mb-6">
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Research Title</label>
                    <p class="text-xl font-bold text-slate-800 dark:text-white mt-1 leading-snug" id="modal-title"></p>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Category</label>
                        <p class="text-base font-semibold text-slate-700 dark:text-slate-200 mt-1" id="modal-category"></p>
                    </div>
                    <div class="p-4 bg-slate-50 dark:bg-slate-800 rounded-xl border border-slate-100 dark:border-slate-700">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Adviser</label>
                        <p class="text-base font-semibold text-slate-700 dark:text-slate-200 mt-1" id="modal-adviser"></p>
                    </div>
                </div>

                <div class="space-y-4">
                    <h3 class="text-sm font-bold text-brand-primary uppercase border-b border-slate-100 pb-2 mb-4">Status Timeline</h3>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-2 h-2 rounded-full bg-brand-primary"></div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-slate-700">Initial Submission</p>
                            <p class="text-xs text-slate-500" id="modal-status"></p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 opacity-50">
                        <div class="w-2 h-2 rounded-full bg-slate-300"></div>
                        <div class="flex-1">
                            <p class="text-sm font-medium text-slate-700">Technical Review</p>
                            <p class="text-xs text-slate-500">Pending</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-50 dark:bg-slate-800 px-6 py-4 flex justify-end border-t border-slate-100 dark:border-slate-700">
                <button onclick="closeModal('detail-modal')" class="px-6 py-2 bg-white border border-slate-300 text-slate-700 font-semibold rounded-lg hover:bg-slate-50 transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>
</x-user_layout>

<script>
    function openHelpModal() { 
        const helpModal = document.querySelector('.faq-modal');
        if(helpModal) helpModal.classList.remove('hidden');
    }
    
    function closeHelpModal() {
        const helpModal = document.querySelector('.faq-modal'); 
        if(helpModal) helpModal.classList.add('hidden');
    }

    function openDetailModal(title, category, adviser, status) {
        const modal = document.querySelector('.detail-modal');
        modal.classList.remove('hidden');
        modal.querySelector('#modal-title').textContent = title;
        modal.querySelector('#modal-category').textContent = category;
        modal.querySelector('#modal-adviser').textContent = adviser;
        modal.querySelector('#modal-status').textContent = status;
    }

    function closeModal(modalClass) { 
        document.querySelector("." + modalClass).classList.add("hidden"); 
    }
</script>