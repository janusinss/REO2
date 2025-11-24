<x-admin_layout>
    <x-slot name="title">Initial Submissions (SOP 03)</x-slot>

    <div class="space-y-6">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-yellow-100 text-yellow-600 flex items-center justify-center"><i class="fas fa-inbox text-xl"></i></div>
                <div><p class="text-2xl font-bold text-slate-800">{{ count($pendingSubmissions) }}</p><p class="text-xs text-slate-500 uppercase font-bold">Pending Classification</p></div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center"><i class="fas fa-search text-xl"></i></div>
                <div><p class="text-2xl font-bold text-slate-800">8</p><p class="text-xs text-slate-500 uppercase font-bold">Under Review</p></div>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-green-100 text-green-600 flex items-center justify-center"><i class="fas fa-check-circle text-xl"></i></div>
                <div><p class="text-2xl font-bold text-slate-800">12</p><p class="text-xs text-slate-500 uppercase font-bold">Cleared This Month</p></div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
            <div class="p-6 border-b border-slate-200 flex justify-between items-center bg-slate-50">
                <h3 class="font-bold text-slate-800">Incoming Protocols</h3>
                
                <div class="flex gap-2">
                    <input type="text" placeholder="Search researcher or title..." class="bg-white border border-slate-300 text-sm rounded-lg px-4 py-2 outline-none focus:border-[#8B0000]">
                </div>
            </div>

            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="text-xs uppercase tracking-wider text-slate-500 font-bold border-b border-slate-100">
                        <th class="p-6">Date Received</th>
                        <th class="p-6">Protocol Details</th>
                        <th class="p-6">Researcher</th>
                        <th class="p-6 text-center">Completeness</th>
                        <th class="p-6 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    @forelse($pendingSubmissions as $sub)
                    <tr class="group hover:bg-slate-50 transition-colors">
                        <td class="p-6 font-mono text-slate-500">{{ $sub->created_at->format('Y-m-d') }}</td>
                        <td class="p-6">
                            <p class="font-bold text-slate-800 text-base mb-1 line-clamp-1" title="{{ $sub->Study_Protocol_title }}">{{ $sub->Study_Protocol_title }}</p>
                            <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-500 rounded text-[10px] font-bold uppercase">{{ $sub->Research_Category }}</span>
                        </td>
                        <td class="p-6">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-[#8B0000]/10 text-[#8B0000] flex items-center justify-center font-bold">
                                    {{ substr($sub->author->first_name ?? 'U', 0, 1) }}
                                </div>
                                <div>
                                    <p class="font-bold text-slate-700">{{ $sub->author->first_name ?? 'Unknown' }} {{ $sub->author->last_name ?? '' }}</p>
                                    <p class="text-xs text-slate-400">{{ $sub->author->college ?? 'External' }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-6 text-center">
                            <span class="inline-flex items-center gap-1 text-green-600 font-bold text-xs bg-green-50 px-2 py-1 rounded border border-green-100">
                                <i class="fas fa-check"></i> Passed AI
                            </span>
                        </td>
                        <td class="p-6 text-right">
                            <button onclick="openTriageModal('{{ $sub->id }}', '{{ $sub->Study_Protocol_title }}')" class="bg-[#8B0000] hover:bg-red-900 text-white px-4 py-2 rounded-lg font-bold text-xs shadow-md transition-all hover:-translate-y-0.5">
                                Classify
                            </button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="p-12 text-center text-slate-400">
                            <i class="fas fa-inbox text-4xl mb-3 opacity-30"></i>
                            <p>No pending submissions found.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div id="triageModal" class="hidden fixed inset-0 z-[60] flex items-center justify-center bg-black/60 backdrop-blur-sm p-4">
        <div class="bg-white rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden animate-[scaleIn_0.2s_ease-out]">
            <div class="bg-slate-900 p-6 border-b border-slate-800">
                <h3 class="text-white font-bold text-lg">Protocol Classification</h3>
                <p class="text-slate-400 text-xs mt-1">Determine the level of review required (SOP 04/05/06).</p>
            </div>
            
            <form id="triageForm" method="POST" action="">
                @csrf
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Protocol Title</label>
                        <p id="modalTitle" class="text-slate-800 font-bold bg-slate-50 p-3 rounded-lg border border-slate-200"></p>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-3">Select Review Type</label>
                        
                        <div class="space-y-3">
                            <label class="flex items-start gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-green-50 hover:border-green-200 transition-all">
                                <input type="radio" name="review_type" value="Exempt" class="mt-1 text-green-600 focus:ring-green-500">
                                <div>
                                    <span class="block font-bold text-slate-800 text-sm">Exempt Review (SOP 04)</span>
                                    <span class="block text-xs text-slate-500 mt-0.5">No human participants or minimal risk.</span>
                                </div>
                            </label>

                            <label class="flex items-start gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-blue-50 hover:border-blue-200 transition-all">
                                <input type="radio" name="review_type" value="Expedited" class="mt-1 text-blue-600 focus:ring-blue-500">
                                <div>
                                    <span class="block font-bold text-slate-800 text-sm">Expedited Review (SOP 05)</span>
                                    <span class="block text-xs text-slate-500 mt-0.5">Minimal risk. Assigned to 2 Primary Reviewers.</span>
                                </div>
                            </label>

                            <label class="flex items-start gap-3 p-3 border border-slate-200 rounded-xl cursor-pointer hover:bg-red-50 hover:border-red-200 transition-all">
                                <input type="radio" name="review_type" value="Full Review" class="mt-1 text-[#8B0000] focus:ring-[#8B0000]">
                                <div>
                                    <span class="block font-bold text-slate-800 text-sm">Full Board Review (SOP 06)</span>
                                    <span class="block text-xs text-slate-500 mt-0.5">High risk / Vulnerable groups. Requires meeting.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-slate-100 p-4 rounded-lg flex justify-between items-center">
                        <span class="text-xs font-bold text-slate-500">System will assign Code:</span>
                        <span class="font-mono font-bold text-slate-900 bg-white px-2 py-1 rounded border border-slate-200">{{ date('Y') }}-{{ str_pad($pendingSubmissions->count() + 1, 3, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>

                <div class="p-6 border-t border-slate-100 bg-slate-50 flex justify-end gap-3">
                    <button type="button" onclick="closeTriage()" class="px-5 py-2.5 text-slate-600 font-bold text-sm hover:bg-white rounded-lg transition-colors">Cancel</button>
                    <button type="submit" class="px-6 py-2.5 bg-[#8B0000] text-white font-bold text-sm rounded-lg shadow-lg hover:bg-red-900 transition-colors">Confirm & Assign</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openTriageModal(id, title) {
            const modal = document.getElementById('triageModal');
            const titleEl = document.getElementById('modalTitle');
            const form = document.getElementById('triageForm');
            
            titleEl.textContent = title;
            form.action = `/admin/${id}/set-initial-review`; // Route to be created
            
            modal.classList.remove('hidden');
        }

        function closeTriage() {
            document.getElementById('triageModal').classList.add('hidden');
        }
    </script>
</x-admin_layout>