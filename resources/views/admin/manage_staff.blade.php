<x-admin_layout>
    <div class="flex flex-col h-full">
        
        <div class="flex justify-between items-end mb-8 pb-4 border-b border-slate-200">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900 font-heading">Staff Management</h1>
                <p class="text-slate-500 text-sm mt-1">Manage REO personnel, reviewers, and system administrators.</p>
            </div>
            <button class="bg-slate-900 hover:bg-slate-800 text-white font-bold py-2.5 px-5 rounded-xl shadow-lg flex items-center gap-2 transition-all">
                <span class="material-symbols-outlined text-xl">person_add</span>
                <span>Add Staff</span>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg bg-purple-100 text-purple-600 flex items-center justify-center"><i class="fas fa-user-shield"></i></div>
                <div><p class="text-xs text-slate-500 uppercase font-bold">Admins</p><p class="text-xl font-extrabold text-slate-800">3</p></div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center"><i class="fas fa-glasses"></i></div>
                <div><p class="text-xs text-slate-500 uppercase font-bold">Reviewers</p><p class="text-xl font-extrabold text-slate-800">12</p></div>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-200 shadow-sm flex items-center gap-4">
                <div class="w-10 h-10 rounded-lg bg-orange-100 text-orange-600 flex items-center justify-center"><i class="fas fa-headset"></i></div>
                <div><p class="text-xs text-slate-500 uppercase font-bold">Support</p><p class="text-xl font-extrabold text-slate-800">5</p></div>
            </div>
        </div>

        <div class="bg-white border border-slate-200 rounded-2xl shadow-sm overflow-hidden flex-grow">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-slate-50 border-b border-slate-200 text-xs uppercase tracking-wider text-slate-500 font-bold">
                        <th class="p-5">Staff Member</th>
                        <th class="p-5">Role</th>
                        <th class="p-5">Assigned College</th>
                        <th class="p-5">Status</th>
                        <th class="p-5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    <tr class="group hover:bg-slate-50 transition-colors">
                        <td class="p-5">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Connor&background=8B0000&color=fff" class="w-9 h-9 rounded-full">
                                <div>
                                    <p class="font-bold text-slate-800">Sarah Connor</p>
                                    <p class="text-xs text-slate-500">sarah.c@reo.wmsu.edu.ph</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-5">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-bold bg-purple-100 text-purple-700 border border-purple-200">
                                Administrator
                            </span>
                        </td>
                        <td class="p-5 text-sm text-slate-600">All Colleges</td>
                        <td class="p-5">
                            <span class="text-xs font-bold text-green-600 flex items-center gap-1"><span class="w-1.5 h-1.5 bg-green-600 rounded-full"></span> Active</span>
                        </td>
                        <td class="p-5 text-right">
                            <button class="text-slate-400 hover:text-brand-primary transition-colors"><i class="fas fa-ellipsis-v"></i></button>
                        </td>
                    </tr>
                    
                    <tr class="group hover:bg-slate-50 transition-colors">
                        <td class="p-5">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=0D8ABC&color=fff" class="w-9 h-9 rounded-full">
                                <div>
                                    <p class="font-bold text-slate-800">Dr. John Doe</p>
                                    <p class="text-xs text-slate-500">j.doe@reo.wmsu.edu.ph</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-5">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-xs font-bold bg-blue-100 text-blue-700 border border-blue-200">
                                Technical Reviewer
                            </span>
                        </td>
                        <td class="p-5 text-sm text-slate-600">College of Science</td>
                        <td class="p-5">
                            <span class="text-xs font-bold text-green-600 flex items-center gap-1"><span class="w-1.5 h-1.5 bg-green-600 rounded-full"></span> Active</span>
                        </td>
                        <td class="p-5 text-right">
                            <button class="text-slate-400 hover:text-brand-primary transition-colors"><i class="fas fa-ellipsis-v"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin_layout>