<x-admin_layout>
    <div class="flex flex-col h-full">
        
        <div class="mb-8 border-b border-slate-200 pb-6 flex flex-col md:flex-row justify-between items-end">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900 font-heading">All Applications</h1>
                <p class="text-slate-500 mt-2">Master record of all research proposals submitted to REO.</p>
            </div>
            <div class="flex gap-2 mt-4 md:mt-0">
                <button class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg text-xs font-bold uppercase tracking-wider hover:bg-slate-50">Export CSV</button>
                <button class="px-4 py-2 bg-white border border-slate-200 text-slate-600 rounded-lg text-xs font-bold uppercase tracking-wider hover:bg-slate-50">Print View</button>
            </div>
        </div>

        <div class="bg-white p-4 rounded-t-2xl border border-slate-200 border-b-0 flex flex-col md:flex-row gap-4">
            <div class="relative flex-grow">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input type="text" placeholder="Search by title, ID, or researcher..." class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-brand-primary outline-none">
            </div>
            <select class="px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-600 focus:ring-2 focus:ring-brand-primary outline-none cursor-pointer">
                <option>Status: All</option>
                <option>Pending</option>
                <option>Approved</option>
                <option>Revise</option>
            </select>
            <select class="px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-600 focus:ring-2 focus:ring-brand-primary outline-none cursor-pointer">
                <option>Year: 2025</option>
                <option>Year: 2024</option>
            </select>
        </div>

        <div class="bg-white border border-slate-200 rounded-b-2xl rounded-tr-2xl shadow-sm overflow-hidden flex-grow">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-xs uppercase tracking-wider text-slate-500 font-bold">
                            <th class="p-5">ID</th>
                            <th class="p-5">Research Title</th>
                            <th class="p-5">Category</th>
                            <th class="p-5">Proponent</th>
                            <th class="p-5">Status</th>
                            <th class="p-5 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($applications as $app)
                        <tr class="group hover:bg-slate-50 transition-colors">
                            <td class="p-5 text-xs font-mono text-slate-400">#{{ str_pad($app->id, 4, '0', STR_PAD_LEFT) }}</td>
                            <td class="p-5">
                                <p class="font-bold text-slate-800 text-sm line-clamp-1 max-w-md">{{ $app->Study_Protocol_title }}</p>
                            </td>
                            <td class="p-5 text-sm text-slate-600">
                                {{ $app->Research_Category }}
                            </td>
                            <td class="p-5 text-sm text-slate-600 font-medium">
                                {{ $app->author->first_name ?? 'Unknown' }} {{ substr($app->author->last_name ?? '', 0, 1) }}.
                            </td>
                            <td class="p-5">
                                @php
                                    $colors = [
                                        'Pending' => 'bg-yellow-100 text-yellow-700',
                                        'Approved' => 'bg-green-100 text-green-700',
                                        'Revise' => 'bg-orange-100 text-orange-700',
                                        'Rejected' => 'bg-red-100 text-red-700'
                                    ];
                                    $color = $colors[$app->Status] ?? 'bg-slate-100 text-slate-600';
                                @endphp
                                <span class="inline-block px-2.5 py-1 rounded-md text-xs font-bold {{ $color }}">
                                    {{ $app->Status }}
                                </span>
                            </td>
                            <td class="p-5 text-right">
                                <a href="{{ route('admin.view_files', $app->id) }}" class="text-slate-400 hover:text-brand-primary p-2 rounded-lg transition-colors">
                                    <span class="material-symbols-outlined text-lg">visibility</span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="p-4 border-t border-slate-200 bg-slate-50 flex justify-center">
                {{ $applications->links('pagination::tailwind') }} 
            </div>
        </div>
    </div>
</x-admin_layout>