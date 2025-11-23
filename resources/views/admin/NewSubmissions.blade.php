<x-admin_layout>
    <div class="max-w-full mx-auto space-y-6 h-full flex flex-col">
        
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center pb-6 border-b border-slate-200">
            <div>
                <h1 class="text-2xl font-bold text-slate-800 font-heading">Submission Queue</h1>
                <p class="text-slate-500 text-sm mt-1">Manage incoming protocols and review status.</p>
            </div>
            
            <div class="flex gap-3 mt-4 md:mt-0 w-full md:w-auto">
                <div class="relative flex-grow md:flex-grow-0">
                    <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-sm"></i>
                    <input type="text" placeholder="Search protocol..." 
                        class="pl-10 pr-4 py-2 bg-white border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-brand-primary focus:border-brand-primary outline-none w-full md:w-64 shadow-sm">
                </div>
                <button class="px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-600 hover:bg-slate-50">
                    <i class="fas fa-filter"></i>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 xl:grid-cols-2 gap-8 flex-grow overflow-hidden">
            
            <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 flex flex-col overflow-hidden h-[calc(100vh-240px)]">
                <div class="p-5 border-b border-slate-100 bg-slate-50/50 flex justify-between items-center">
                    <h3 class="font-bold text-slate-700 flex items-center gap-2">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full"></span> Pending Review
                    </h3>
                    <span class="text-xs font-bold bg-white border border-slate-200 px-2 py-1 rounded-md text-slate-500">{{ count($pendingSubmissions) }}</span>
                </div>
                
                <div class="overflow-y-auto flex-grow p-2 space-y-2">
                    @forelse ($pendingSubmissions as $s)
                    <div class="group p-4 rounded-xl border border-transparent hover:bg-slate-50 hover:border-slate-200 transition-all cursor-default">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">{{ $s['created_at']->format('M d, Y') }}</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-yellow-100 text-yellow-700 border border-yellow-200">
                                {{ $s['Status'] }}
                            </span>
                        </div>
                        <h4 class="text-base font-bold text-slate-800 mb-1 group-hover:text-brand-primary transition-colors line-clamp-1">
                            {{ $s['Study_Protocol_title'] }}
                        </h4>
                        <p class="text-xs text-slate-500 mb-4">
                            By <span class="font-semibold text-slate-700">{{ $s->author->first_name ?? 'Unknown' }} {{ $s->author->last_name ?? '' }}</span>
                        </p>
                        
                        <div class="flex gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
                            <button onclick="openDetailsModal(this)" 
                                data-id="{{ $s->id }}"
                                data-title="{{ e($s->Study_Protocol_title) }}"
                                data-category="{{ e($s->Research_Category) }}"
                                data-author="{{ e(($s->author->first_name ?? '') . ' ' . ($s->author->last_name ?? '')) }}"
                                data-email="{{ e($s->author->email ?? '') }}"
                                data-adviser="{{ e($s->Adviser ?? '') }}"
                                data-status="{{ e($s->Status ?? '') }}"
                                data-contact="{{ $s->author->contact ?? '' }}"
                                data-created="{{ $s->created_at ? $s->created_at->format('Y-m-d H:i') : '' }}"
                                class="flex-1 py-1.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-100 hover:text-slate-800">
                                Details
                            </button>
                            <button onclick="openActionModal(this)" 
                                data-id="{{ $s->id }}"
                                class="flex-1 py-1.5 text-xs font-bold text-white bg-slate-800 rounded-lg hover:bg-slate-700 shadow-md">
                                Review
                            </button>
                        </div>
                    </div>
                    @empty
                    <div class="h-full flex flex-col items-center justify-center text-slate-400">
                        <i class="fas fa-inbox text-4xl mb-2 opacity-20"></i>
                        <p class="text-sm">No pending items</p>
                    </div>
                    @endforelse
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 flex flex-col overflow-hidden h-[calc(100vh-240px)]">
                <div class="p-5 border-b border-slate-100 bg-red-50/30 flex justify-between items-center">
                    <h3 class="font-bold text-slate-700 flex items-center gap-2">
                        <span class="w-2 h-2 bg-red-500 rounded-full"></span> Needs Attention
                    </h3>
                    <span class="text-xs font-bold bg-white border border-slate-200 px-2 py-1 rounded-md text-slate-500">{{ count($incompleteSubmissions) }}</span>
                </div>
                
                <div class="overflow-y-auto flex-grow p-2 space-y-2">
                    @forelse ($incompleteSubmissions as $s)
                    <div class="group p-4 rounded-xl border border-transparent hover:bg-red-50/30 hover:border-red-100 transition-all cursor-default">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">{{ $s['created_at']->format('M d, Y') }}</span>
                            <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-red-100 text-red-700 border border-red-200">
                                Incomplete
                            </span>
                        </div>
                        <h4 class="text-base font-bold text-slate-800 mb-1 group-hover:text-red-700 transition-colors line-clamp-1">
                            {{ $s['Study_Protocol_title'] }}
                        </h4>
                        
                        <div class="flex gap-2 mt-4 opacity-60 group-hover:opacity-100 transition-opacity">
                            <button onclick="openDetailsModal(this)" 
                                data-id="{{ $s->id }}"
                                data-title="{{ e($s->Study_Protocol_title) }}"
                                data-category="{{ e($s->Research_Category) }}"
                                data-author="{{ e(($s->author->first_name ?? '') . ' ' . ($s->author->last_name ?? '')) }}"
                                data-email="{{ e($s->author->email ?? '') }}"
                                data-adviser="{{ e($s->Adviser ?? '') }}"
                                data-status="{{ e($s->Status ?? '') }}"
                                data-contact="{{ $s->author->contact ?? '' }}"
                                data-created="{{ $s->created_at ? $s->created_at->format('Y-m-d H:i') : '' }}"
                                class="flex-1 py-1.5 text-xs font-bold text-slate-600 bg-white border border-slate-200 rounded-lg hover:bg-slate-100">
                                View
                            </button>
                            <button onclick="openActionModal(this)" 
                                data-id="{{ $s->id }}"
                                class="flex-1 py-1.5 text-xs font-bold text-brand-primary bg-red-50 border border-red-100 rounded-lg hover:bg-red-100">
                                Re-Assess
                            </button>
                        </div>
                    </div>
                    @empty
                    <div class="h-full flex flex-col items-center justify-center text-slate-400">
                        <i class="fas fa-check-circle text-4xl mb-2 opacity-20"></i>
                        <p class="text-sm">All clear</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div id="detailsmodal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm transition-opacity">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden animate-[scaleIn_0.2s_ease-out]">
            <div class="bg-slate-900 p-6 flex justify-between items-center">
                <h2 class="text-lg font-bold text-white">Submission Details</h2>
                <button onclick="closeModal('detailsmodal')" class="text-white/50 hover:text-white transition-colors">
                    <i class="fas fa-times text-lg"></i>
                </button>
            </div>
            <div class="p-8 space-y-6 max-h-[70vh] overflow-y-auto">
                <div>
                    <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Research Title</label>
                    <p class="text-lg font-bold text-slate-800 mt-1" id="modal-title">...</p>
                </div>
                
                <div class="grid grid-cols-2 gap-6">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Author</label>
                        <p class="font-semibold text-slate-700" id="modal-author">...</p>
                        <p class="text-xs text-slate-500 mt-1" id="modal-email">...</p>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-wider">Category</label>
                        <p class="font-semibold text-slate-700" id="modal-category">...</p>
                    </div>
                </div>

                <div class="flex justify-end pt-4 border-t border-slate-100">
                    <button onclick="closeModal('detailsmodal')" class="px-6 py-2 text-slate-500 font-bold hover:bg-slate-50 rounded-lg transition-colors">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="actionModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-sm overflow-hidden p-6 space-y-6 animate-[scaleIn_0.2s_ease-out]">
            <div class="text-center">
                <div class="w-12 h-12 bg-brand-primary/10 text-brand-primary rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-gavel text-xl"></i>
                </div>
                <h2 class="text-xl font-bold text-slate-900">Review Decision</h2>
                <p class="text-sm text-slate-500 mt-1">What is your verdict on this protocol?</p>
            </div>

            <div class="space-y-3">
                <button onclick="setSubmissionStatus('complete')" class="w-full py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-xl shadow-lg shadow-green-900/20 transition-all">
                    <i class="fas fa-check mr-2"></i> Accept for Review
                </button>
                <button onclick="setSubmissionStatus('incomplete')" class="w-full py-3 bg-white border-2 border-red-100 text-red-600 font-bold rounded-xl hover:bg-red-50 transition-all">
                    <i class="fas fa-exclamation-circle mr-2"></i> Mark Incomplete
                </button>
            </div>
            
            <button onclick="closeModal('actionModal')" class="w-full text-xs font-bold text-slate-400 uppercase tracking-wider hover:text-slate-600">Cancel</button>
        </div>
    </div>

    <div id="incompleteReasonModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden p-6 space-y-4 animate-[scaleIn_0.2s_ease-out]">
            <h2 class="text-lg font-bold text-slate-800">Missing Requirements</h2>
            <textarea id="incompleteReason" rows="4" class="w-full p-4 bg-slate-50 border border-slate-200 rounded-xl focus:ring-2 focus:ring-brand-primary outline-none text-sm" placeholder="E.g., Missing signature on page 4..."></textarea>
            <div class="flex justify-end gap-3">
                <button onclick="closeModal('incompleteReasonModal')" class="px-4 py-2 text-slate-500 font-bold hover:bg-slate-50 rounded-lg">Cancel</button>
                <button onclick="submitIncompleteReason()" class="px-6 py-2 bg-red-600 text-white font-bold rounded-lg hover:bg-red-700 shadow-lg">Submit</button>
            </div>
        </div>
    </div>

    <script>
        function openDetailsModal(button) {
            const data = button.dataset;
            ['title', 'category', 'author', 'email', 'adviser', 'status', 'contact', 'created'].forEach(key => {
                const el = document.getElementById(`modal-${key}`);
                if(el) el.textContent = data[key] || '—';
            });
            document.getElementById('detailsmodal').classList.remove('hidden');
        }

        let selectedSubmissionId = null;
        function openActionModal(button) {
            selectedSubmissionId = button.dataset.id;
            document.getElementById('actionModal').classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        function setSubmissionStatus(action) {
            if (!selectedSubmissionId) return;
            if (action === 'complete') {
                updateStatus(selectedSubmissionId, 'For Initial Review', null);
                closeModal('actionModal');
            } else {
                closeModal('actionModal');
                document.getElementById('incompleteReasonModal').classList.remove('hidden');
            }
        }

        function submitIncompleteReason() {
            const reason = document.getElementById('incompleteReason').value.trim();
            if (!reason) return alert('Please provide a reason.');
            updateStatus(selectedSubmissionId, 'Incomplete', reason);
            closeModal('incompleteReasonModal');
        }

        function getCsrfToken() {
            return document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
        }

        async function updateStatus(id, status, reason) {
            const token = getCsrfToken();
            if(!token) return alert('CSRF token missing');

            try {
                const res = await fetch(`/admin/update-status/${id}`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json', 'X-CSRF-TOKEN': token },
                    body: JSON.stringify({ status, reason })
                });
                if(!res.ok) throw new Error('Failed');
                const data = await res.json();
                alert(data.message);
                window.location.reload();
            } catch(e) {
                console.error(e);
                alert('Error updating status');
            }
        }
    </script>
</x-admin_layout>