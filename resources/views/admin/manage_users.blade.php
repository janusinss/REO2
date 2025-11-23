<x-admin_layout>
    <div class="flex flex-col h-full">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
            <div>
                <h2 class="text-3xl font-bold text-slate-900 font-heading">User Directory</h2>
                <p class="text-slate-500 text-sm mt-1">Manage faculty, staff, and student accounts.</p>
            </div>
            <button class="mt-4 md:mt-0 bg-brand-primary hover:bg-red-800 text-white font-bold py-2.5 px-5 rounded-xl shadow-lg shadow-red-900/20 flex items-center gap-2 transition-all hover:-translate-y-0.5">
                <span class="material-symbols-outlined text-xl">add</span>
                <span>Add User</span>
            </button>
        </div>

        <div class="bg-white p-4 rounded-t-2xl border border-slate-200 border-b-0 flex gap-4 items-center">
            <div class="relative flex-grow max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input class="w-full pl-10 pr-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:ring-2 focus:ring-brand-primary focus:bg-white transition-all outline-none" placeholder="Search users..." type="text" />
            </div>
            <div class="flex gap-2">
                <button class="p-2 text-slate-500 hover:bg-slate-100 rounded-lg border border-transparent hover:border-slate-200" title="Filter">
                    <span class="material-symbols-outlined">filter_list</span>
                </button>
                <button class="p-2 text-slate-500 hover:bg-slate-100 rounded-lg border border-transparent hover:border-slate-200" title="Export">
                    <span class="material-symbols-outlined">download</span>
                </button>
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-b-2xl rounded-tr-2xl shadow-sm overflow-hidden flex-grow">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-200 text-xs uppercase tracking-wider text-slate-500 font-bold">
                            <th class="p-5">Name / Role</th>
                            <th class="p-5">Contact Info</th>
                            <th class="p-5">Status</th>
                            <th class="p-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="group hover:bg-blue-50/50 transition-colors">
                            <td class="p-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-brand-primary/10 text-brand-primary flex items-center justify-center font-bold">DL</div>
                                    <div>
                                        <p class="font-bold text-slate-800">Dr. David Lee</p>
                                        <p class="text-xs text-slate-500">Faculty Researcher</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-5 text-sm text-slate-600">
                                <div class="flex items-center gap-2">
                                    <i class="far fa-envelope text-slate-400"></i> david.lee@wmsu.edu.ph
                                </div>
                            </td>
                            <td class="p-5">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 border border-green-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-600"></span> Active
                                </span>
                            </td>
                            <td class="p-5 text-right">
                                <button class="text-slate-400 hover:text-brand-primary p-2 rounded-full hover:bg-red-50 transition-colors">
                                    <span class="material-symbols-outlined text-xl">edit_square</span>
                                </button>
                            </td>
                        </tr>

                        <tr class="group hover:bg-blue-50/50 transition-colors">
                            <td class="p-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center font-bold">JM</div>
                                    <div>
                                        <p class="font-bold text-slate-800">Jane Miller</p>
                                        <p class="text-xs text-slate-500">Student Researcher</p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-5 text-sm text-slate-600">
                                <div class="flex items-center gap-2">
                                    <i class="far fa-envelope text-slate-400"></i> jane.m@wmsu.edu.ph
                                </div>
                            </td>
                            <td class="p-5">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-slate-100 text-slate-600 border border-slate-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span> Inactive
                                </span>
                            </td>
                            <td class="p-5 text-right">
                                <button class="text-slate-400 hover:text-brand-primary p-2 rounded-full hover:bg-red-50 transition-colors">
                                    <span class="material-symbols-outlined text-xl">edit_square</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="p-4 border-t border-slate-200 bg-slate-50 flex justify-between items-center">
                <p class="text-xs text-slate-500">Showing 1-10 of 45 users</p>
                <div class="flex gap-2">
                    <button class="px-3 py-1 border border-slate-200 bg-white rounded text-xs font-bold text-slate-500 hover:bg-slate-100">Prev</button>
                    <button class="px-3 py-1 border border-slate-200 bg-white rounded text-xs font-bold text-slate-500 hover:bg-slate-100">Next</button>
                </div>
            </div>
        </div>
    </div>
</x-admin_layout>