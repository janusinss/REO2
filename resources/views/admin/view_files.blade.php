<x-admin_layout>
    <main class="max-w-6xl mx-auto py-8 animate-[fadeInUp_0.3s_ease-out]">
        
        <div class="mb-8">
            <a href="{{ route('admin.NewSubmissions') }}" class="inline-flex items-center gap-2 text-slate-500 hover:text-brand-primary font-bold text-xs uppercase tracking-wide mb-4 transition-colors">
                <i class="fas fa-arrow-left"></i> Back to Submissions
            </a>
            <div class="flex items-start justify-between">
                <div>
                    <h1 class="text-3xl font-extrabold text-slate-900 font-heading">Submission Documents</h1>
                    <p class="text-slate-500 mt-2 text-lg">Reviewing files for: <span class="font-bold text-slate-800">{{ $researchTitle->Study_Protocol_title ?? 'Untitled Submission' }}</span></p>
                </div>
                <span class="px-4 py-2 rounded-full bg-brand-primary/10 text-brand-primary font-bold text-sm border border-brand-primary/20">
                    {{ $files->count() }} Files Uploaded
                </span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($files as $file)
            <div class="group bg-white rounded-2xl shadow-lg shadow-slate-200/50 border border-slate-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
                
                <div class="bg-slate-50 p-6 border-b border-slate-100 flex justify-center items-center h-40 group-hover:bg-blue-50/30 transition-colors">
                    @if(Str::endsWith($file->file_path, '.pdf'))
                        <i class="fas fa-file-pdf text-6xl text-red-500 drop-shadow-md"></i>
                    @else
                        <i class="fas fa-file-word text-6xl text-blue-500 drop-shadow-md"></i>
                    @endif
                </div>

                <div class="p-6 flex-grow">
                    <h3 class="font-bold text-slate-800 mb-1 truncate" title="{{ $file->file_name }}">
                        {{ $file->file_name }}
                    </h3>
                    <div class="flex items-center gap-2 text-xs text-slate-400 mb-4">
                        <i class="far fa-clock"></i> {{ $file->created_at->format('M d, Y • h:i A') }}
                    </div>
                    
                    <div class="flex gap-2 mt-auto">
                        <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank" 
                           class="flex-1 bg-slate-900 text-white font-bold py-2.5 rounded-lg text-center text-sm hover:bg-brand-primary transition-colors shadow-md flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-base">visibility</span> View
                        </a>
                        <a href="{{ asset('storage/' . $file->file_path) }}" download
                           class="w-10 flex items-center justify-center border border-slate-200 rounded-lg text-slate-500 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                            <span class="material-symbols-outlined text-base">download</span>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full flex flex-col items-center justify-center py-20 bg-slate-50 rounded-3xl border-2 border-dashed border-slate-200">
                <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mb-4 text-slate-300">
                    <span class="material-symbols-outlined text-4xl">folder_off</span>
                </div>
                <h3 class="text-xl font-bold text-slate-400">No documents found</h3>
                <p class="text-slate-400 text-sm mt-1">The researcher hasn't uploaded any files yet.</p>
            </div>
            @endforelse
        </div>
    </main>
</x-admin_layout>