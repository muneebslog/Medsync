<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HMS - Hospital Management System</title>
         {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

      

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            :root {
                --hms-teal: #2CB9B0;
                --hms-teal-dark: #5EDAD0;
            }
        </style>
    </head>
    <body class="bg-[#F6F8FA] dark:bg-[#0F172A] text-[#1b1b18] dark:text-[#E5E7EB] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col transition-colors duration-300">
        
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 border-[#2CB9B0] dark:border-[#5EDAD0] border text-[#2CB9B0] dark:text-[#5EDAD0] rounded-sm text-sm font-medium">
                            Go to Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 text-[#1b1b18] dark:text-[#E5E7EB] hover:bg-white/50 dark:hover:bg-[#1E293B] rounded-sm text-sm transition-colors">
                            Staff Login
                        </a>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 bg-[#2CB9B0] dark:bg-[#5EDAD0] text-white dark:text-[#0F172A] rounded-sm text-sm font-medium">
                                Patient Portal
                            </a>
                        @endif --}}
                    @endauth
                </nav>
            @endif
        </header>

        <div class="flex items-center justify-center w-full lg:grow">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row shadow-sm border border-black/[0.03] dark:border-white/[0.03] rounded-lg overflow-hidden">
                
                <div class="flex-1 p-8 lg:p-16 bg-white dark:bg-[#1E293B] transition-colors duration-300">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-8 h-8 rounded bg-[#2CB9B0] dark:bg-[#5EDAD0] flex items-center justify-center">
                            <span class="text-white dark:text-[#0F172A] font-bold text-xs">H</span>
                        </div>
                        <span class="font-semibold tracking-tight text-slate-900 dark:text-white">HMS Central</span>
                    </div>

                    <h1 class="mb-4 text-2xl font-semibold text-slate-900 dark:text-white leading-tight">
                        Healthcare management <br/>
                        <span class="text-[#2CB9B0] dark:text-[#5EDAD0]">reimagined with clarity.</span>
                    </h1>
                    
                    <p class="mb-10 text-slate-500 dark:text-[#9CA3AF] text-sm leading-relaxed max-w-sm">
                        A data-forward system built for high-pressure hospital environments. Low cognitive load, quietly premium design.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="mt-1 w-2 h-2 rounded-full bg-[#2CB9B0] dark:bg-[#5EDAD0] shadow-[0_0_8px_rgba(44,185,176,0.4)]"></div>
                            <div>
                                <h3 class="text-sm font-medium text-slate-800 dark:text-slate-200">Unified Health Records</h3>
                                <p class="text-xs text-slate-400 dark:text-slate-500">Fast access to patient data without the clutter.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="mt-1 w-2 h-2 rounded-full bg-[#2CB9B0] dark:bg-[#5EDAD0] opacity-50"></div>
                            <div>
                                <h3 class="text-sm font-medium text-slate-800 dark:text-slate-200">Clinical Workflow</h3>
                                <p class="text-xs text-slate-400 dark:text-slate-500">Optimized for doctors and nursing staff efficiency.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 flex items-center gap-6">
                        <a href="{{ route('login') }}" class="px-8 py-2.5 bg-[#2CB9B0] dark:bg-[#5EDAD0] text-white dark:text-[#0F172A] rounded-md text-sm font-medium hover:opacity-90 transition-opacity">
                            Enter System
                        </a>
                        <span class="text-[10px] uppercase tracking-widest text-slate-400 dark:text-slate-500 font-bold">V 1.0 Stable</span>
                    </div>
                </div>

                <div class="bg-[#F9FAFB] dark:bg-[#111827] relative lg:w-[400px] shrink-0 overflow-hidden group">
                    <img 
                        src="{{ asset('img/hero.png') }}" 
                        alt="Hospital Management System" 
                        class="w-full h-full object-cover "
                    >
{{--                     
                    <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-[#1E293B] via-transparent to-transparent lg:bg-gradient-to-l"></div> --}}
                    
                    {{-- <div class="absolute bottom-8 left-8 right-8 p-4 bg-white/10 dark:bg-black/20 backdrop-blur-md border border-white/20 rounded-sm">
                        <p class="text-[10px] text-white/80 uppercase tracking-widest mb-1">Current Status</p>
                        <div class="flex justify-between items-end">
                            <span class="text-lg font-light text-white italic">"Data-Forward"</span>
                            <div class="flex gap-1">
                                <div class="w-1 h-4 bg-[#5EDAD0] rounded-full animate-pulse"></div>
                                <div class="w-1 h-3 bg-[#5EDAD0]/50 rounded-full"></div>
                                <div class="w-1 h-5 bg-[#5EDAD0]/80 rounded-full"></div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </main>
        </div>

        <footer class="mt-8 text-[11px] text-slate-400 dark:text-slate-600 uppercase tracking-widest">
            &copy; {{ date('Y') }} Hospital Management System &bull; Quietly Premium
        </footer>
    </body>
</html>