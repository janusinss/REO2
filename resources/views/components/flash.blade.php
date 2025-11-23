@if(session()->has('success') || session()->has('error'))
<div 
    x-data="{ show: true }" 
    x-init="setTimeout(() => show = false, 4000)" 
    x-show="show"
    x-transition:enter="transform ease-out duration-300 transition"
    x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
    x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed top-24 right-6 z-[100] max-w-sm w-full bg-white rounded-xl shadow-2xl border-l-4 {{ session('error') ? 'border-red-500' : 'border-green-500' }} overflow-hidden"
>
    <div class="p-4 flex items-start gap-4">
        <div class="flex-shrink-0">
            @if(session('error'))
                <i class="fas fa-exclamation-circle text-red-500 text-xl"></i>
            @else
                <i class="fas fa-check-circle text-green-500 text-xl"></i>
            @endif
        </div>
        <div class="flex-1 pt-0.5">
            <p class="text-sm font-bold text-slate-900">
                {{ session('error') ? 'Action Failed' : 'Success' }}
            </p>
            <p class="mt-1 text-sm text-slate-500">
                {{ session('success') ?? session('error') }}
            </p>
        </div>
        <button @click="show = false" class="text-slate-400 hover:text-slate-600 transition-colors">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="h-1 w-full bg-slate-100">
        <div class="h-full {{ session('error') ? 'bg-red-500' : 'bg-green-500' }} animate-[progress_4s_linear]"></div>
    </div>
</div>

<style>
    @keyframes progress { from { width: 100%; } to { width: 0%; } }
</style>

<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endif