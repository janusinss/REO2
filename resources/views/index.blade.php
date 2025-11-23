<x-layout>
    <div class="relative w-full h-screen overflow-hidden">
        <div class="slider-container h-full w-full">
            @foreach(['reocpic.jpg', 'reoc2.jpg', 'reoc3.jpg'] as $index => $img)
            <div class="slide {{ $index == 0 ? 'active' : '' }} absolute inset-0 w-full h-full opacity-0 transition-opacity duration-1000 ease-in-out">
                <div class="absolute inset-0 bg-cover bg-center transform scale-105 transition-transform duration-[10000ms] hover:scale-110" 
                     style="background-image: url('./images/{{ $img }}');"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent z-10"></div>
            </div>
            @endforeach
        </div>

        <div class="absolute inset-0 z-20 flex flex-col justify-center px-6 md:px-20 max-w-7xl mx-auto">
            <div class="max-w-3xl animate-[fadeInUp_1s_ease-out]">
                <span class="inline-block py-1 px-3 rounded-full bg-brand-primary/20 border border-brand-primary/50 text-red-200 text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-sm">
                    Est. 2025 • Western Mindanao State University
                </span>
                <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-[1.1] mb-6 drop-shadow-2xl">
                    Where Research <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 to-red-200">Meets Innovation.</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-200 mb-10 leading-relaxed max-w-2xl border-l-4 border-brand-primary pl-6">
                    REO is the digital hub for students and faculty to innovate, collaborate, and maintain the highest ethical standards in academic research.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('register') }}" class="bg-brand-primary hover:bg-red-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition-all transform hover:-translate-y-1 shadow-lg shadow-red-900/50 flex items-center gap-2">
                        Get Started <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                    <a href="#mission" class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/30 px-8 py-4 rounded-lg font-bold text-lg transition-all">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 right-10 z-30 flex gap-2">
            <button id="prev" class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center text-white hover:bg-white hover:text-brand-dark transition-all">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button id="next" class="w-12 h-12 rounded-full border border-white/30 flex items-center justify-center text-white hover:bg-white hover:text-brand-dark transition-all">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <section id="mission" class="relative py-24 bg-surface-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                
                <div class="relative">
                    <div class="absolute -inset-4 bg-brand-primary/5 rounded-2xl rotate-3"></div>
                    <img src="./images/msg2.png" alt="WMSU REO Visual" class="relative rounded-xl shadow-2xl w-full object-cover z-10 transform transition-transform hover:scale-[1.01] duration-500">
                    <div class="absolute -bottom-10 -right-10 bg-white p-6 rounded-xl shadow-xl z-20 hidden md:block max-w-xs border-l-4 border-brand-primary">
                        <p class="text-brand-dark font-bold text-lg">"Safeguarding the welfare of participants."</p>
                        <p class="text-slate-500 text-sm mt-2">- REO Core Value</p>
                    </div>
                </div>

                <div class="space-y-8">
                    <div>
                        <h2 class="text-brand-primary text-sm font-bold uppercase tracking-widest mb-2">Our Purpose</h2>
                        <h3 class="text-4xl font-bold text-slate-900 mb-6">Upholding Ethical Standards</h3>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow group">
                        <div class="w-12 h-12 bg-red-50 rounded-lg flex items-center justify-center mb-4 group-hover:bg-brand-primary transition-colors">
                            <i class="fas fa-shield-alt text-brand-primary text-xl group-hover:text-white transition-colors"></i>
                        </div>
                        <h4 class="text-xl font-bold text-slate-800 mb-2">Mission</h4>
                        <p class="text-slate-600 leading-relaxed">WMSU-REO/CERC safeguards the general welfare of human participants and animal subjects in the conduct of research.</p>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition-shadow group">
                        <div class="w-12 h-12 bg-red-50 rounded-lg flex items-center justify-center mb-4 group-hover:bg-brand-primary transition-colors">
                            <i class="fas fa-eye text-brand-primary text-xl group-hover:text-white transition-colors"></i>
                        </div>
                        <h4 class="text-xl font-bold text-slate-800 mb-2">Vision</h4>
                        <p class="text-slate-600 leading-relaxed">To be an accredited board instituted to conduct ethics review in various fields of research involving human and animal subjects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-brand-dark to-brand-primary z-0"></div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-500/20 rounded-full translate-x-1/3 translate-y-1/3 blur-3xl"></div>

        <div class="max-w-6xl mx-auto px-6 relative z-10 flex flex-col md:flex-row items-center justify-between gap-12">
            <div class="text-white max-w-2xl">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Innovate?</h2>
                <p class="text-red-100 text-lg leading-relaxed mb-8">
                    Join the WMSU Research Ethics Office community today. Access cutting-edge technology, expert mentorship, and a vibrant network of researchers.
                </p>
                <div class="flex flex-wrap gap-4">
                    <div class="flex items-center gap-2 text-sm font-medium bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm">
                        <i class="fas fa-check-circle text-green-400"></i> Expert Mentorship
                    </div>
                    <div class="flex items-center gap-2 text-sm font-medium bg-white/10 px-4 py-2 rounded-full backdrop-blur-sm">
                        <i class="fas fa-check-circle text-green-400"></i> Secure Storage
                    </div>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-red-400 to-orange-400 rounded-xl blur opacity-75 group-hover:opacity-100 transition duration-1000 group-hover:duration-200"></div>
                <a href="{{ route('register') }}" class="relative block bg-white text-brand-dark px-10 py-5 rounded-xl font-bold text-xl hover:bg-gray-50 transition-all transform active:scale-95 shadow-2xl">
                    Join Us Now
                </a>
            </div>
        </div>
    </section>

    <x-footer/>
  
    <script>
        // Logic preserved, simplified
        const slides = document.querySelectorAll('.slide');
        const next = document.getElementById('next');
        const prev = document.getElementById('prev');
        let currentIndex = 0;

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        next.addEventListener('click', nextSlide);
        prev.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        });

        setInterval(nextSlide, 6000); // Increased duration slightly for better reading time
    </script>
</x-layout>