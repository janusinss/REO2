@if(session('first_login'))
<div id="welcome-modal" class="fixed inset-0 z-[90] flex items-center justify-center p-4 bg-brand-dark/90 backdrop-blur-md transition-opacity animate-[fadeIn_0.5s_ease-out]">
    <div class="bg-white rounded-3xl shadow-2xl w-full max-w-4xl overflow-hidden flex flex-col md:flex-row relative animate-[scaleIn_0.3s_ease-out_0.2s_both]">
        
        <div class="md:w-2/5 bg-gradient-to-br from-brand-primary to-red-900 relative p-10 text-white flex flex-col justify-center overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-6 border border-white/30">
                    <span class="material-symbols-outlined text-4xl">waving_hand</span>
                </div>
                <h2 class="text-3xl font-extrabold font-heading leading-tight">Welcome to <br> REO Portal</h2>
                <p class="mt-4 text-red-100 text-sm leading-relaxed">Your centralized hub for research ethics submission, compliance checking, and collaboration.</p>
            </div>
            <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        </div>

        <div class="md:w-3/5 p-10 md:p-12 flex flex-col justify-center">
            <h3 class="text-2xl font-bold text-slate-900 mb-6">Getting Started</h3>
            
            <div class="space-y-6 mb-8">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="material-symbols-outlined">upload_file</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800">Submit Protocols</h4>
                        <p class="text-sm text-slate-500">Upload your PDF documents for AI pre-screening.</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 rounded-full bg-green-50 text-green-600 flex items-center justify-center flex-shrink-0 mt-1">
                        <span class="material-symbols-outlined">event_available</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-800">Track Progress</h4>
                        <p class="text-sm text-slate-500">Get real-time updates on review status and schedules.</p>
                    </div>
                </div>
            </div>

            <button onclick="closeWelcomeModal()" class="w-full py-4 bg-brand-primary text-white font-bold rounded-xl shadow-lg shadow-red-900/20 hover:bg-red-800 hover:-translate-y-1 transition-all">
                Start Exploring
            </button>
        </div>

        <button onclick="closeWelcomeModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-800 transition-colors">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
</div>

<script>
    function closeWelcomeModal() {
        const modal = document.getElementById('welcome-modal');
        modal.style.opacity = '0';
        setTimeout(() => modal.remove(), 300);
    }
</script>
@endif