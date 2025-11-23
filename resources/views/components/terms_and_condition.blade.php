<div id="terms-modal" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/70 backdrop-blur-sm p-4 hidden opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-2xl flex flex-col max-h-[85vh] overflow-hidden transform scale-95 transition-transform duration-300" id="terms-content">
        
        <div class="px-8 py-6 border-b border-slate-100 flex justify-between items-center bg-slate-50">
            <div>
                <h2 class="text-2xl font-bold text-slate-900 font-heading">Terms of Service</h2>
                <p class="text-sm text-slate-500">Last updated: November 2025</p>
            </div>
            <button onclick="closeTerms()" class="text-slate-400 hover:text-brand-primary transition-colors">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>

        <div class="p-8 overflow-y-auto text-slate-600 leading-relaxed text-sm space-y-6">
            <p>Welcome to the Western Mindanao State University Research Ethics Office (WMSU-REO) Portal. By accessing or using this system, you agree to comply with and be bound by the following terms and conditions.</p>
            
            <h3 class="font-bold text-slate-900 text-lg">1. Data Privacy and Confidentiality</h3>
            <p>All research protocols, data, and personal information uploaded to this portal are strictly confidential. WMSU-REO adheres to the Data Privacy Act of 2012. You agree not to disclose any sensitive information accessed through this system to unauthorized parties.</p>

            <h3 class="font-bold text-slate-900 text-lg">2. Submission Integrity</h3>
            <p>Researchers affirm that all documents submitted are authentic, original, and free from plagiarism. The use of the AI Pre-screening tool is for assistance only and does not guarantee ethical approval.</p>

            <h3 class="font-bold text-slate-900 text-lg">3. Account Security</h3>
            <p>You are responsible for maintaining the confidentiality of your account credentials. Any activity occurring under your account is your sole responsibility.</p>
            
            <h3 class="font-bold text-slate-900 text-lg">4. System Usage</h3>
            <p>The REO Portal is strictly for academic and research ethics review purposes. Unauthorized access, data mining, or disruption of system services is prohibited and subject to disciplinary action.</p>
        </div>

        <div class="p-6 border-t border-slate-100 bg-slate-50 flex justify-end gap-4">
            <button onclick="closeTerms()" class="px-6 py-2.5 rounded-xl text-slate-600 font-bold hover:bg-slate-100 transition-colors">Decline</button>
            <form action="{{ route('accept.terms') }}" method="POST">
                @csrf
                <button type="submit" class="px-8 py-2.5 rounded-xl bg-brand-primary text-white font-bold shadow-lg shadow-red-900/20 hover:bg-red-800 hover:-translate-y-0.5 transition-all">
                    I Accept
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    function openTerms() {
        const modal = document.getElementById('terms-modal');
        const content = document.getElementById('terms-content');
        modal.classList.remove('hidden');
        // Small timeout to allow display:block to apply before opacity transition
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            content.classList.remove('scale-95');
            content.classList.add('scale-100');
        }, 10);
    }

    function closeTerms() {
        const modal = document.getElementById('terms-modal');
        const content = document.getElementById('terms-content');
        modal.classList.add('opacity-0');
        content.classList.remove('scale-100');
        content.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }
</script>