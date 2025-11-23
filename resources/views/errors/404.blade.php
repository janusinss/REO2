<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found | WMSU REO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;900&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .font-heading { font-family: 'Montserrat', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 h-screen flex items-center justify-center overflow-hidden relative">
    
    <div class="absolute -top-20 -right-20 w-96 h-96 bg-red-100 rounded-full blur-3xl opacity-50"></div>
    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-t from-white to-transparent"></div>

    <div class="relative z-10 text-center px-6 max-w-2xl">
        <h1 class="text-[150px] font-heading font-black text-slate-900 leading-none tracking-tighter opacity-10 select-none">404</h1>
        
        <div class="-mt-20 relative">
            <div class="w-24 h-24 bg-red-600 text-white rounded-2xl flex items-center justify-center mx-auto shadow-xl rotate-12 mb-6">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                </svg>
            </div>
            
            <h2 class="text-3xl font-bold text-slate-900 mb-4">Protocol Missing</h2>
            <p class="text-slate-500 text-lg mb-8">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>
            
            <div class="flex justify-center gap-4">
                <button onclick="history.back()" class="px-6 py-3 rounded-xl border border-slate-200 text-slate-600 font-bold hover:bg-white hover:shadow-md transition-all">
                    Go Back
                </button>
                <a href="/" class="px-6 py-3 rounded-xl bg-red-700 text-white font-bold hover:bg-red-800 shadow-lg shadow-red-900/20 transition-all">
                    Return Home
                </a>
            </div>
        </div>
    </div>

</body>
</html>