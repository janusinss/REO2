<x-user_layout>
    <div class="min-h-screen bg-surface-50 py-12 px-4 sm:px-6 lg:px-8">
        
        <div class="max-w-7xl mx-auto">
            <div class="mb-10">
                <h2 class="text-3xl font-extrabold text-slate-900 font-heading tracking-tight">New Research Submission</h2>
                <p class="mt-2 text-slate-500">Complete the protocol details and pre-screen your documents.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-8">
                    <div class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden relative">
                        <div class="h-1.5 bg-gradient-to-r from-[#B22222] to-[#8B0000] w-full"></div>
                        
                        <div class="p-8 md:p-10">
                            <h3 class="text-xl font-bold text-slate-800 mb-6 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[#8B0000]">edit_document</span> Protocol Details
                            </h3>

                            <form action="{{ route('submit.title') }}" method="POST" class="space-y-6">
                                @csrf

                                <div>
                                    <label for="title" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Research Title</label>
                                    <input type="text" name="title" id="title" required 
                                        class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 font-bold placeholder-slate-400 focus:ring-2 focus:ring-[#8B0000] focus:bg-white transition-all" 
                                        placeholder="Enter the complete research title...">
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="category" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Category</label>
                                        <div class="relative">
                                            <select name="category" id="category" required 
                                                class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-700 appearance-none focus:ring-2 focus:ring-[#8B0000] focus:bg-white transition-all font-medium">
                                                <option value="" disabled selected>Select Category</option>
                                                <option value="Research">Research</option>
                                                <option value="Extension">Extension</option>
                                            </select>
                                            <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none text-slate-500">
                                                <i class="fas fa-chevron-down text-xs"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <label for="adviser" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Research Adviser</label>
                                        <input type="text" name="adviser" id="adviser" required 
                                            class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 font-medium focus:ring-2 focus:ring-[#8B0000] focus:bg-white transition-all" 
                                            placeholder="e.g., Prof. Jane Doe">
                                    </div>
                                </div>

                                <div>
                                    <label for="abstract" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Abstract / Description</label>
                                    <textarea name="abstract" id="abstract" rows="6" required 
                                        class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-[#8B0000] focus:bg-white transition-all resize-y leading-relaxed" 
                                        placeholder="Provide a brief summary of objectives..."></textarea>
                                </div>

                                <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-4">
                                    <a href="{{ route('home') }}" class="px-6 py-3 rounded-xl text-slate-500 font-bold hover:bg-slate-50 transition-colors">Cancel</a>
                                    <button type="submit" class="px-8 py-3 bg-[#8B0000] text-white font-bold rounded-xl shadow-lg shadow-red-900/20 hover:bg-red-900 hover:-translate-y-1 transition-all flex items-center gap-2">
                                        <span>Save & Continue</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1 space-y-6">
                    
                    <div class="bg-slate-900 text-white rounded-2xl shadow-xl overflow-hidden relative">
                        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                        <div class="p-6 relative z-10">
                            <h3 class="font-bold text-lg flex items-center gap-2 mb-4">
                                <span class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center text-[#FF6B6B]"><i class="fas fa-list-check"></i></span>
                                Required Documents
                            </h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-pdf text-red-400"></i> <span>Application Form</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-pdf text-red-400"></i> <span>Research Protocol/Prosposal</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-pdf text-red-400"></i> <span>Technical Review Clearance</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-pdf text-red-400"></i> <span>Data Instruments (Optional)</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-pdf text-red-400"></i> <span>Informed Consent</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-pdf text-red-400"></i> <span>Curriculum Vitae of Researcher</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-word text-blue-400"></i> <span>Study Protocol Assessment Form</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-word text-blue-400"></i> <span>Informed Consent Assessment Form</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-word text-blue-400"></i> <span>Exempt Review Assessment Form</span>
                                </div>
                                <div class="flex items-center gap-3 bg-white/5 p-2.5 rounded-lg border border-white/5 hover:bg-white/10 transition-colors">
                                    <i class="fas fa-file-word text-blue-400"></i> <span>Exempt Review Assessment Form</span>
                                </div>
                                
                            </div>
                            <div class="mt-6 pt-4 border-t border-white/10 text-center">
                                <a href="{{ route('resources') }}" class="text-xs font-bold text-slate-400 hover:text-white transition-colors">Download Templates →</a>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-lg border border-slate-200 overflow-hidden">
                        <div class="bg-slate-50 p-4 border-b border-slate-200 flex justify-between items-center">
                            <h3 class="font-bold text-slate-800 flex items-center gap-2">
                                <span class="material-symbols-outlined text-[#8B0000]">smart_toy</span> AI Pre-Check
                            </h3>
                            <span class="text-[10px] font-bold bg-green-100 text-green-700 px-2 py-1 rounded">BETA</span>
                        </div>
                        
                        <div class="p-6">
                            <p class="text-xs text-slate-500 mb-4">Scan your documents for missing signatures or formatting errors before submitting.</p>
                            
                            <div id="drop-zone" class="border-2 border-dashed border-slate-300 rounded-xl p-6 text-center hover:border-[#8B0000] hover:bg-red-50/30 transition-all cursor-pointer group relative">
                                <input type="file" id="ai_files" multiple accept=".pdf,.doc,.docx" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                <div class="group-hover:scale-105 transition-transform duration-300">
                                    <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-2 text-slate-400 group-hover:bg-red-100 group-hover:text-[#8B0000] transition-colors">
                                        <i class="fas fa-cloud-upload-alt text-xl"></i>
                                    </div>
                                    <p class="font-bold text-slate-600 text-sm">Drop files to Scan</p>
                                </div>
                            </div>

                            <div id="file-list" class="mt-3 space-y-1"></div>

                            <div id="ai-loader" class="hidden mt-4">
                                <div class="flex items-center gap-2 text-xs text-[#8B0000] font-bold mb-1">
                                    <span class="w-2 h-2 bg-[#8B0000] rounded-full animate-ping"></span> Analyzing...
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                    <div class="bg-[#8B0000] h-full rounded-full animate-[progress_1.5s_infinite_linear] w-1/3"></div>
                                </div>
                            </div>

                            <button type="button" onclick="performAiCheck()" id="check-btn" class="mt-4 w-full py-2 bg-slate-800 text-white text-sm font-bold rounded-lg hover:bg-slate-700 transition-colors hidden shadow-md">
                                Run Analysis
                            </button>

                            <div id="ai-results" class="hidden mt-4 p-3 bg-slate-50 rounded-lg border border-slate-200 text-xs text-slate-700 max-h-40 overflow-y-auto">
                                <div id="ai-feedback-content"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        const fileInput = document.getElementById('ai_files');
        const fileList = document.getElementById('file-list');
        const checkBtn = document.getElementById('check-btn');
        const loader = document.getElementById('ai-loader');
        const results = document.getElementById('ai-results');
        const feedback = document.getElementById('ai-feedback-content');

        fileInput.addEventListener('change', () => {
            fileList.innerHTML = '';
            if (fileInput.files.length > 0) {
                Array.from(fileInput.files).forEach(file => {
                    fileList.innerHTML += `
                        <div class="flex items-center justify-between text-xs text-slate-600 bg-slate-50 p-2 rounded border border-slate-100">
                            <span class="truncate max-w-[150px]">${file.name}</span>
                            <i class="fas fa-check-circle text-green-500"></i>
                        </div>`;
                });
                checkBtn.classList.remove('hidden');
            }
        });

        async function performAiCheck() {
            const formData = new FormData();
            Array.from(fileInput.files).forEach(file => {
                formData.append('research_files[]', file);
            });

            checkBtn.disabled = true;
            checkBtn.classList.add('opacity-50');
            loader.classList.remove('hidden');
            results.classList.add('hidden');

            try {
                const response = await fetch("{{ route('submit.ai_check') }}", {
                    method: 'POST',
                    headers: { 'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value },
                    body: formData
                });

                const data = await response.json();
                loader.classList.add('hidden');
                results.classList.remove('hidden');
                checkBtn.disabled = false;
                checkBtn.classList.remove('opacity-50');

                if (data.feedback) {
                    // Basic markdown-to-html conversion for the table
                    let html = data.feedback
                        .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
                        .replace(/\n/g, '<br>');
                    feedback.innerHTML = html; 
                } else {
                    feedback.innerHTML = `<span class="text-red-600 font-bold">Error: ${data.error}</span>`;
                }
            } catch (error) {
                loader.classList.add('hidden');
                checkBtn.disabled = false;
                alert('AI Service Unavailable. Please try again later.');
            }
        }
    </script>
    
    <style>
        @keyframes progress {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(300%); }
        }
    </style>
</x-user_layout>