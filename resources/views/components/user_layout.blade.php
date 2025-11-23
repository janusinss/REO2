<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>REO | Researcher Portal</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/reoc-nobg.png') }}" >
    
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-heading { font-family: 'Montserrat', sans-serif; }
        
        /* Smooth Sidebar Transition */
        .sidebar-transition { transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
        
        /* Active Link Indicator */
        .nav-link.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-right: 3px solid #ea2a2a;
        }
    </style>
</head>

<body class="bg-surface-50 text-slate-800 antialiased">
    <div class="flex min-h-screen overflow-hidden bg-surface-50">
        
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-brand-dark text-white shadow-2xl transform -translate-x-full md:translate-x-0 sidebar-transition flex flex-col">
            
            <div class="h-20 flex items-center px-6 border-b border-white/10 bg-black/20 backdrop-blur-sm">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-white flex items-center justify-center">
                        <img src="{{ asset('images/reoc-nobg.png') }}" alt="Logo" class="w-6 h-6">
                    </div>
                    <div>
                        <h1 class="font-heading font-bold text-lg tracking-wide">WMSU REO</h1>
                        <p class="text-[10px] text-slate-400 uppercase tracking-wider">Researcher Portal</p>
                    </div>
                </div>
                <button id="close-sidebar" class="md:hidden ml-auto text-white/70 hover:text-white">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>

            <nav class="flex-1 px-3 py-6 space-y-1 overflow-y-auto">
                <p class="px-3 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-2">Menu</p>
                
                <a href="{{ route('home') }}" class="nav-link flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/5 hover:text-white transition-all {{ request()->routeIs('home') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">dashboard</span> Dashboard
                </a>
                
                <a href="{{ route('submit') }}" class="nav-link flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/5 hover:text-white transition-all {{ request()->routeIs('submit') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">upload_file</span> New Submission
                </a>

                <p class="px-3 text-[10px] font-bold text-slate-500 uppercase tracking-widest mt-6 mb-2">Support</p>

                <a href="{{ route('resources') }}" class="nav-link flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/5 hover:text-white transition-all {{ request()->routeIs('resources') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">folder_open</span> Resources
                </a>
                
                <a href="{{ route('instructions') }}" class="nav-link flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/5 hover:text-white transition-all {{ request()->routeIs('instructions') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">description</span> Guidelines
                </a>

                <a href="{{ route('settings') }}" class="nav-link flex items-center gap-3 px-3 py-3 rounded-lg text-sm font-medium text-slate-300 hover:bg-white/5 hover:text-white transition-all {{ request()->routeIs('settings') ? 'active' : '' }}">
                    <span class="material-symbols-outlined">settings</span> Settings
                </a>
            </nav>

            <div class="p-4 border-t border-white/10 bg-black/20">
                <a href="{{ route('logout') }}" class="flex items-center gap-3 px-3 py-2 text-sm font-medium text-red-400 hover:text-red-300 hover:bg-white/5 rounded-lg transition-colors">
                    <span class="material-symbols-outlined">logout</span> Sign Out
                </a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col md:ml-64 min-w-0 bg-surface-50">
            
            <header class="sticky top-0 z-40 bg-white/80 backdrop-blur-md border-b border-slate-200 h-16 flex items-center justify-between px-4 sm:px-6">
                <div class="flex items-center gap-4">
                    <button id="open-sidebar" class="md:hidden text-slate-500 hover:text-slate-800">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <h2 class="text-lg font-bold text-slate-800 hidden sm:block">
                        Welcome, <span class="text-brand-primary">{{ explode(' ', Auth::user()->first_name)[0] }}</span>
                    </h2>
                </div>

                <div class="flex items-center gap-4">
                    <x-notification-tab/>
                    
                    <div class="h-8 w-px bg-slate-200 mx-1"></div>
                    
                    <button onclick="openProfModal()" class="flex items-center gap-3 hover:bg-slate-50 rounded-full p-1 pr-3 transition-colors">
                        <div class="w-8 h-8 rounded-full bg-brand-primary text-white flex items-center justify-center font-bold text-sm">
                            {{ substr(Auth::user()->first_name, 0, 1) }}
                        </div>
                        <span class="text-sm font-medium text-slate-700 hidden md:block">Profile</span>
                        <i class="fas fa-chevron-down text-xs text-slate-400 hidden md:block"></i>
                    </button>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                <x-profile/>
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const openBtn = document.getElementById('open-sidebar');
        const closeBtn = document.getElementById('close-sidebar');
        const overlay = document.createElement('div');
        
        overlay.className = 'fixed inset-0 bg-black/50 z-40 md:hidden hidden backdrop-blur-sm transition-opacity';
        document.body.appendChild(overlay);

        function toggleSidebar() {
            const isClosed = sidebar.classList.contains('-translate-x-full');
            if (isClosed) {
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }

        openBtn.addEventListener('click', toggleSidebar);
        closeBtn.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);
    </script>
</body>
</html>