<x-user_layout>
    <div class="min-h-screen bg-surface-50 py-12 px-4 sm:px-6 lg:px-8">
        
        <div class="max-w-3xl mx-auto text-center mb-10">
            <h2 class="text-3xl font-extrabold text-slate-900 font-heading tracking-tight">New Submission</h2>
            <p class="mt-2 text-slate-500">Fill out the details below to initiate a new research protocol review.</p>
        </div>

        <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden relative">
            <div class="h-2 bg-gradient-to-r from-brand-secondary to-brand-primary w-full"></div>

            <div class="p-8 md:p-12">
                <form action="{{ route('submit.title') }}" method="POST" class="space-y-8">
                    @csrf

                    <div class="space-y-6">
                        <div>
                            <label for="title" class="block text-sm font-bold text-slate-700 mb-2">Research Title</label>
                            <input type="text" name="title" id="title" required 
                                class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 font-medium placeholder-slate-400 focus:ring-2 focus:ring-brand-primary focus:bg-white transition-all" 
                                placeholder="Enter the full title of your research...">
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="category" class="block text-sm font-bold text-slate-700 mb-2">Category</label>
                                <div class="relative">
                                    <select name="category" id="category" required 
                                        class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-700 appearance-none focus:ring-2 focus:ring-brand-primary focus:bg-white transition-all">
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
                                <label for="adviser" class="block text-sm font-bold text-slate-700 mb-2">Research Adviser</label>
                                <input type="text" name="adviser" id="adviser" required 
                                    class="w-full px-5 py-3.5 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-brand-primary focus:bg-white transition-all" 
                                    placeholder="e.g., Prof. Jane Doe">
                            </div>
                        </div>
                    </div>

                    <hr class="border-slate-100">

                    <div>
                        <label for="abstract" class="block text-sm font-bold text-slate-700 mb-2">Abstract / Description</label>
                        <textarea name="abstract" id="abstract" rows="6" required 
                            class="w-full px-5 py-4 bg-slate-50 border border-slate-200 rounded-xl text-slate-900 focus:ring-2 focus:ring-brand-primary focus:bg-white transition-all resize-y leading-relaxed" 
                            placeholder="Provide a brief summary of your research objectives and methodology..."></textarea>
                        <p class="text-right text-xs text-slate-400 mt-2">Min. 100 characters</p>
                    </div>

                    <div class="flex items-center justify-end gap-4 pt-4">
                        <a href="{{ route('home') }}" class="px-6 py-3 rounded-xl text-slate-500 font-bold hover:bg-slate-100 transition-colors">Cancel</a>
                        <div class="bg-slate-50 rounded-2xl border border-slate-200 p-8 mb-8">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center text-white shadow-lg">
                                    <span class="material-symbols-outlined text-2xl">smart_toy</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">AI Compliance Checker</h3>
                                    <p class="text-slate-500 text-sm mt-1">Upload your PDF documents here first to check for formatting errors (page numbers, signatures) before final submission.</p>
                                </div>
                            </div>

                            <div id="drop-zone" class="border-2 border-dashed border-slate-300 rounded-xl p-8 text-center hover:bg-white hover:border-brand-primary transition-all cursor-pointer relative group">
                                <input type="file" id="ai_files" multiple accept=".pdf,.doc,.docx" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                
                                <div class="group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-cloud-upload-alt text-4xl text-slate-300 group-hover:text-brand-primary mb-3 transition-colors"></i>
                                    <p class="font-bold text-slate-600">Click or Drag files here to scan</p>
                                    <p class="text-xs text-slate-400 mt-1">PDF, DOCX (Max 10MB)</p>
                                </div>
                            </div>

                            <div id="file-list" class="mt-4 space-y-2"></div>
                            <div id="ai-loader" class="hidden mt-4">
                                <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden">
                                    <div class="bg-blue-600 h-2 rounded-full animate-progress"></div>
                                </div>
                                <p class="text-xs text-center text-blue-600 font-bold mt-2 animate-pulse">Analyzing documents with AI...</p>
                            </div>

                            <button type="button" onclick="performAiCheck()" id="check-btn" class="mt-6 w-full py-3 bg-slate-900 text-white font-bold rounded-xl hover:bg-brand-primary transition-colors shadow-lg hidden">
                                Run Compliance Check
                            </button>

                            <div id="ai-results" class="hidden mt-6 bg-white rounded-xl border border-slate-200 p-6 animate-[fadeInUp_0.3s_ease-out]">
                                <h4 class="font-bold text-slate-900 mb-4 flex items-center gap-2">
                                    <i class="fas fa-clipboard-check text-green-500"></i> Compliance Report
                                </h4>
                                <div id="ai-feedback-content" class="prose prose-sm max-w-none text-slate-600"></div>
                            </div>
                        </div>

                        <style>
                            @keyframes progress {
                                0% { width: 0%; }
                                50% { width: 70%; }
                                100% { width: 100%; }
                            }
                            .animate-progress { animation: progress 2s infinite linear; }
                        </style>

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
                                            <div class="flex items-center gap-2 text-sm text-slate-600 bg-white p-2 rounded-lg border border-slate-100">
                                                <i class="fas fa-file text-brand-primary"></i> ${file.name}
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

                                // UI Updates
                                checkBtn.disabled = true;
                                checkBtn.classList.add('opacity-50');
                                loader.classList.remove('hidden');
                                results.classList.add('hidden');

                                try {
                                    const response = await fetch("{{ route('submit.ai_check') }}", {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                                        },
                                        body: formData
                                    });

                                    const data = await response.json();
                                    
                                    loader.classList.add('hidden');
                                    results.classList.remove('hidden');
                                    checkBtn.disabled = false;
                                    checkBtn.classList.remove('opacity-50');

                                    if (data.feedback) {
                                        // Convert markdown table to HTML (simple replacement) or display as is
                                        // Ideally use a library like 'marked', but for now we format newlines
                                        feedback.innerHTML = marked.parse(data.feedback); 
                                    } else if (data.error) {
                                        feedback.innerHTML = `<p class="text-red-600 font-bold">Error: ${data.error}</p>`;
                                    }

                                } catch (error) {
                                    console.error(error);
                                    loader.classList.add('hidden');
                                    checkBtn.disabled = false;
                                    alert('An error occurred while communicating with the AI checker.');
                                }
                            }
                        </script>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-user_layout>