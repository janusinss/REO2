<x-admin_layout>
    <x-slot name="title">REO Membership (SOP 01)</x-slot>

    <div class="flex flex-col h-full space-y-6">
        
        <div class="flex justify-between items-end pb-4 border-b border-slate-200">
            <div>
                <h2 class="text-lg font-bold text-slate-800">Committee Members</h2>
                <p class="text-xs text-slate-500">Manage appointments, expertise, and COI disclosures.</p>
            </div>
            <button class="bg-[#8B0000] text-white px-4 py-2 rounded-xl font-bold text-xs shadow-lg hover:bg-red-900 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-base">person_add</span> Add Member
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                <span class="text-xs font-bold text-slate-400 uppercase">Total Members</span>
                <p class="text-2xl font-bold text-slate-800 mt-1">15</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                <span class="text-xs font-bold text-blue-500 uppercase">Scientists</span>
                <p class="text-2xl font-bold text-slate-800 mt-1">10</p>
            </div>
            <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm">
                <span class="text-xs font-bold text-purple-500 uppercase">Lay Members</span>
                <p class="text-2xl font-bold text-slate-800 mt-1">5</p>
            </div>
            <div class="bg-green-50 p-4 rounded-xl border border-green-100 shadow-sm flex items-center justify-between">
                <div>
                    <span class="text-xs font-bold text-green-600 uppercase">Quorum Status</span>
                    <p class="text-sm font-bold text-green-800 mt-1">Valid</p>
                </div>
                <i class="fas fa-check-circle text-2xl text-green-500"></i>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden flex-1">
            <table class="w-full text-left border-collapse">
                <thead class="bg-slate-50 text-xs uppercase font-bold text-slate-500 border-b border-slate-200">
                    <tr>
                        <th class="p-5">Member Name</th>
                        <th class="p-5">Role (SOP 01)</th>
                        <th class="p-5">Expertise</th>
                        <th class="p-5">Status</th>
                        <th class="p-5 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm">
                    <tr class="group hover:bg-slate-50 transition-colors">
                        <td class="p-5">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Dr.+Jose+Rizal&background=8B0000&color=fff" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="font-bold text-slate-800">Dr. Jose Rizal</p>
                                    <p class="text-xs text-slate-400">College of Medicine</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-5">
                            <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-[10px] font-bold uppercase">Scientist</span>
                        </td>
                        <td class="p-5 text-slate-600">Medical, Clinical Trials</td>
                        <td class="p-5"><span class="text-green-600 font-bold text-xs">Active</span></td>
                        <td class="p-5 text-right">
                            <button class="text-slate-400 hover:text-[#8B0000]"><span class="material-symbols-outlined text-lg">edit</span></button>
                        </td>
                    </tr>

                    <tr class="group hover:bg-slate-50 transition-colors">
                        <td class="p-5">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Maria+Clara&background=0D8ABC&color=fff" class="w-8 h-8 rounded-full">
                                <div>
                                    <p class="font-bold text-slate-800">Ms. Maria Clara</p>
                                    <p class="text-xs text-slate-400">External Affiliate</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-5">
                            <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-[10px] font-bold uppercase">Non-Scientist</span>
                        </td>
                        <td class="p-5 text-slate-600">Community, Ethics</td>
                        <td class="p-5"><span class="text-green-600 font-bold text-xs">Active</span></td>
                        <td class="p-5 text-right">
                            <button class="text-slate-400 hover:text-[#8B0000]"><span class="material-symbols-outlined text-lg">edit</span></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-admin_layout>