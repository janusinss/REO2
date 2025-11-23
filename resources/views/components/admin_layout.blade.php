<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REO Admin Portal</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-heading { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-surface-50 text-slate-800">

    <div class="flex min-h-screen">
        <aside class="w-64 bg-brand-dark text-white flex flex-col fixed inset-y-0 left-0 z-50 shadow-2xl transition-transform duration-300 transform -translate-x-full md:translate-x-0" id="sidebar">
            <div class="h-20 flex items-center px-6 border-b border-white/10 bg-brand-primary/20 backdrop-blur-sm">
                <img src="{{ asset('images/reoc-nobg.png') }}" class="w-8 h-8 mr-3 bg-white rounded-full">
                <div>
                    <h1 class="font-heading font-bold text-lg tracking-wide">REO Admin</h1>
                    <p class="text-[10px] text-slate-400 uppercase tracking-wider">Control Panel</p>
                </div>
            </div>

            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <p class="px-2 text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-2">Main</p>
                
                <a href="{{ route('admin.analytics') }}" class="flex items-center px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.analytics') ? 'bg-brand-primary text-white shadow-lg shadow-red-900/50' : 'text-slate-300 hover:bg-white/5 hover:text-white' }} transition-all">
                    <i class="fas fa-chart-pie w-6"></i> Analytics
                </a>
                
                <a href="{{ route('admin.NewSubmissions') }}" class="flex items-center px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.NewSubmissions') ? 'bg-brand-primary text-white shadow-lg' : 'text-slate-300 hover:bg-white/5 hover:text-white' }} transition-all">
                    <i class="fas fa-file-alt w-6"></i> New Submissions
                </a>

                <p class="px-2 text-[10px] font-bold text-slate-500 uppercase tracking-widest mt-6 mb-2">Management</p>

                <a href="{{ route('admin.applications') }}" class="flex items-center px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.applications') ? 'bg-brand-primary text-white shadow-lg' : 'text-slate-300 hover:bg-white/5 hover:text-white' }} transition-all">
                    <i class="fas fa-tasks w-6"></i> Applications
                </a>
                <a href="{{ route('admin.manage_users') }}" class="flex items-center px-4 py-3 rounded-xl text-sm font-medium {{ request()->routeIs('admin.manage_users') ? 'bg-brand-primary text-white shadow-lg' : 'text-slate-300 hover:bg-white/5 hover:text-white' }} transition-all">
                    <i class="fas fa-users w-6"></i> Users
                </a>
            </nav>

            <div class="p-4 border-t border-white/10 bg-black/20">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-brand-primary flex items-center justify-center text-white font-bold">
                        {{ substr(Auth::user()->first_name ?? 'A', 0, 1) }}
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-white truncate">{{ Auth::user()->first_name ?? 'Admin' }}</p>
                        <a href="{{ route('logout') }}" class="text-xs text-slate-400 hover:text-white transition-colors">Log out</a>
                    </div>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col md:ml-64 min-h-screen transition-all duration-300">
            <header class="md:hidden h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sticky top-0 z-40">
                <button id="sidebarToggle" class="text-slate-600 p-2 rounded-lg hover:bg-slate-100">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <span class="font-bold text-brand-primary">REO Admin</span>
                <div class="w-8"></div> </header>

            <main class="flex-1 p-6 md:p-10 overflow-x-hidden">
                {{ $slot }}
            </main>
        </div>
    </div>

    <script>
        const toggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.createElement('div');
        
        toggle?.addEventListener('click', () => {
            const isClosed = sidebar.classList.contains('-translate-x-full');
            if (isClosed) {
                sidebar.classList.remove('-translate-x-full');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>
    <x-flash />
</body>
</html>