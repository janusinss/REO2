<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Maintenance | WMSU REO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-900 h-screen flex flex-col items-center justify-center text-white relative overflow-hidden">

    <div class="absolute inset-0 z-0 opacity-20">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-red-500 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative z-10 text-center max-w-lg px-6">
        <div class="mb-8 relative inline-block">
            <div class="w-20 h-20 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center animate-pulse">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                </svg>
            </div>
        </div>

        <h1 class="text-3xl font-bold mb-4">System Update in Progress</h1>
        <p class="text-slate-400 leading-relaxed mb-8">
            The REO Portal is currently undergoing scheduled maintenance to improve security and performance. We'll be back online shortly.
        </p>

        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 text-sm text-slate-300">
            <div class="w-2 h-2 bg-yellow-500 rounded-full animate-bounce"></div>
            Estimated uptime: <span class="font-bold text-white">15 Minutes</span>
        </div>
    </div>

</body>
</html>