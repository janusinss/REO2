<x-admin_layout>
    <x-slot name="title">Protocol Database (SOP 23)</x-slot>

    <div class="space-y-6">
        
        <div class="bg-white p-4 rounded-2xl shadow-sm border border-slate-200 flex flex-col md:flex-row gap-4">
            <div class="relative flex-grow">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input type="text" placeholder="Search by Code, Title, or Researcher..." class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-[#8B0000] outline-none">
            </div>
            <div class="flex gap-2">
                <select class="px-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm font-medium text-slate-700 focus:border-[#8B0000] outline-none cursor-pointer">
                    <option value="all">All Statuses</option>
                    <option value="ongoing">On-going</option>
                    <option value="completed">Completed</option>
                    <option value="terminated">Terminated</option>
                </select>
                <button class="px-4 py-2.5 bg-slate-100 text-slate-600 rounded-xl text-sm font-bold hover:bg-slate-200 transition-colors">
                    <i class="fas fa-filter mr-2"></i> More Filters
                </button>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs uppercase tracking-wider text-slate-500 font-bold">
                        <th class="p-5">REOC Code</th>
                        <th class="p-5">Research Title</th>
                        <th class="p-5">Proponent</th>
                        <th class="p-5">Classification</th>
                        <th class="p-5">Current Status</th>
                        <th class="p-5 text-right">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    @foreach($applications as $app)
                    <tr class="group hover:bg-slate-50 transition-colors">
                        <td class="p-5 font-mono font-bold text-[#8B0000]">
                            {{ $app->reoc_code ?? 'PENDING' }}
                        </td>
                        
                        <td class="p-5">
                            <p class="font-bold text-slate-800 line-clamp-1 max-w-xs" title="{{ $app->Study_Protocol_title }}">
                                {{ $app->Study_Protocol_title }}
                            </p>
                        </td>
                        
                        <td class="p-5 text-slate-600">
                            {{ $app->author->first_name ?? 'Unknown' }} {{ substr($app->author->last_name ?? '', 0, 1) }}.
                        </td>

                        <td class="p-5">
                            @if($app->review_type == 'Exempt')
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-[10px] font-bold uppercase">Exempt</span>
                            @elseif($app->review_type == 'Expedited')
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-[10px] font-bold uppercase">Expedited</span>
                            @elseif($app->review_type == 'Full Review')
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-[10px] font-bold uppercase">Full Board</span>
                            @else
                                <span class="bg-slate-100 text-slate-500 px-2 py-1 rounded text-[10px] font-bold uppercase">Unclassified</span>
                            @endif
                        </td>

                        <td class="p-5">
                            @php
                                $statusColors = [
                                    'Pending' => 'bg-yellow-100 text-yellow-700',
                                    'Approved' => 'bg-green-100 text-green-700',
                                    'Revise' => 'bg-orange-100 text-orange-700',
                                    'Rejected' => 'bg-red-100 text-red-700'
                                ];
                            @endphp
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-bold {{ $statusColors[$app->Status] ?? 'bg-slate-100 text-slate-600' }}">
                                <span class="w-1.5 h-1.5 rounded-full bg-current"></span>
                                {{ $app->Status }}
                            </span>
                        </td>

                        <td class="p-5 text-right">
                            <div class="flex justify-end gap-2 opacity-100 group-hover:opacity-100 transition-opacity">
                                <a href="{{ route('admin.view_files', $app->id) }}" class="p-2 text-slate-400 hover:text-[#8B0000] hover:bg-red-50 rounded-lg transition-colors" title="View Files">
                                    <span class="material-symbols-outlined">folder_open</span>
                                </a>
                                <button class="p-2 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors" title="Track History">
                                    <span class="material-symbols-outlined">history</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="p-4 border-t border-slate-200 bg-slate-50 flex justify-center">
                {{ $applications->links('pagination::tailwind') }} 
            </div>
        </div>
    </div>
</x-admin_layout>