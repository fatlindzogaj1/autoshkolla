<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }} — Auto Test</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>

<body class="min-h-screen antialiased" style="background:var(--color-bauhaus-canvas);color:var(--color-bauhaus-ink);">
<div class="flex min-h-screen overflow-x-hidden">
    <aside class="hidden w-64 shrink-0 border-r-4 border-black bg-[#121212] md:flex md:flex-col">
        <div class="border-b-4 border-white/15 px-6 py-5">
            <div class="flex items-center gap-3">
                <span class="flex items-center gap-1.5">
                    <span class="size-3 rounded-full bg-[#d02020]"></span>
                    <span class="size-3 bg-[#f0c020]"></span>
                    <span style="clip-path:polygon(50% 0%,0% 100%,100% 100%)" class="block size-3 bg-[#1040c0]"></span>
                </span>
                <span>
                    <p class="text-base font-black uppercase tracking-[-0.06em] text-white">Auto Test</p>
                    <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-white/50">Admin Panel</p>
                </span>
            </div>
        </div>

        <nav class="flex flex-1 flex-col gap-1 px-3 py-4">
            <a href="{{ route('admin.dashboard') }}" class="group flex items-center gap-3 border-2 border-transparent px-3 py-2.5 text-xs font-bold uppercase tracking-[0.22em] text-white/70 transition hover:border-[#f0c020] hover:bg-[#f0c020]/10 hover:text-[#f0c020] {{ request()->routeIs('admin.dashboard') ? 'border-[#f0c020] bg-[#f0c020]/10 text-[#f0c020]' : '' }}">
                <span class="size-3 rounded-full border-2 border-current opacity-70"></span>
                Dashboard
            </a>
            <a href="{{ route('admin.categories') }}" class="group flex items-center gap-3 border-2 border-transparent px-3 py-2.5 text-xs font-bold uppercase tracking-[0.22em] text-white/70 transition hover:border-[#d02020] hover:bg-[#d02020]/10 hover:text-[#d02020] {{ request()->routeIs('admin.categories') ? 'border-[#d02020] bg-[#d02020]/10 text-[#d02020]' : '' }}">
                <span class="size-3 border-2 border-current opacity-70"></span>
                Kategoritë
            </a>
            <a href="{{ route('admin.questions') }}" class="group flex items-center gap-3 border-2 border-transparent px-3 py-2.5 text-xs font-bold uppercase tracking-[0.22em] text-white/70 transition hover:border-[#1040c0] hover:bg-[#1040c0]/10 hover:text-[#1040c0] {{ request()->routeIs('admin.questions') ? 'border-[#1040c0] bg-[#1040c0]/10 text-[#1040c0]' : '' }}">
                <span style="clip-path:polygon(50% 0%,0% 100%,100% 100%)" class="block size-3 bg-current opacity-70"></span>
                Pyetjet
            </a>
            <a href="{{ route('admin.answers') }}" class="group flex items-center gap-3 border-2 border-transparent px-3 py-2.5 text-xs font-bold uppercase tracking-[0.22em] text-white/70 transition hover:border-[#f0c020] hover:bg-[#f0c020]/10 hover:text-[#f0c020] {{ request()->routeIs('admin.answers') ? 'border-[#f0c020] bg-[#f0c020]/10 text-[#f0c020]' : '' }}">
                <span class="size-3 rotate-45 border-2 border-current opacity-70"></span>
                Përgjigjet
            </a>
            <a href="{{ route('admin.tests') }}" class="group flex items-center gap-3 border-2 border-transparent px-3 py-2.5 text-xs font-bold uppercase tracking-[0.22em] text-white/70 transition hover:border-[#d02020] hover:bg-[#d02020]/10 hover:text-[#d02020] {{ request()->routeIs('admin.tests') ? 'border-[#d02020] bg-[#d02020]/10 text-[#d02020]' : '' }}">
                <span class="size-3 rounded-full bg-current opacity-70"></span>
                Testet
            </a>
        </nav>

        <div class="border-t-4 border-white/15 px-5 py-4 space-y-2">
            <a href="{{ route('home') }}" class="block text-xs font-bold uppercase tracking-[0.22em] text-white/40 transition hover:text-[#f0c020]">
                ← Faqja
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full border-2 border-white/30 px-3 py-2 text-xs font-bold uppercase tracking-[0.22em] text-white/80 transition hover:border-[#d02020] hover:text-[#d02020]">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <div class="flex min-w-0 flex-1 flex-col">
        <header class="border-b-4 border-black bg-white">
            <div class="flex items-center justify-between px-4 py-4 sm:px-6 md:px-8">
                <div>
                    <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">Auto Test</p>
                    <h1 class="text-lg font-black uppercase tracking-[-0.06em] sm:text-xl">{{ $title ?? 'Admin Panel' }}</h1>
                </div>
                <div class="flex items-center gap-2 sm:gap-3">
                    <span class="size-2.5 rounded-full bg-[#d02020] sm:size-3"></span>
                    <span class="size-2.5 bg-[#f0c020] sm:size-3"></span>
                    <span style="clip-path:polygon(50% 0%,0% 100%,100% 100%)" class="block size-2.5 bg-[#1040c0] sm:size-3"></span>
                </div>
            </div>

            <div class="border-t-2 border-black/15 p-3 md:hidden">
                <div class="grid grid-cols-3 gap-2">
                    <a href="{{ route('admin.dashboard') }}" class="border-2 border-black px-2 py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em] {{ request()->routeIs('admin.dashboard') ? 'bg-[#f0c020]' : 'bg-white' }}">Dash</a>
                    <a href="{{ route('admin.categories') }}" class="border-2 border-black px-2 py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em] {{ request()->routeIs('admin.categories') ? 'bg-[#d02020] text-white' : 'bg-white' }}">Kategori</a>
                    <a href="{{ route('admin.questions') }}" class="border-2 border-black px-2 py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em] {{ request()->routeIs('admin.questions') ? 'bg-[#1040c0] text-white' : 'bg-white' }}">Pyetje</a>
                    <a href="{{ route('admin.answers') }}" class="border-2 border-black px-2 py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em] {{ request()->routeIs('admin.answers') ? 'bg-[#f0c020]' : 'bg-white' }}">Pergjigje</a>
                    <a href="{{ route('admin.tests') }}" class="border-2 border-black px-2 py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em] {{ request()->routeIs('admin.tests') ? 'bg-[#d02020] text-white' : 'bg-white' }}">Teste</a>
                    <a href="{{ route('home') }}" class="border-2 border-black bg-white px-2 py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em]">Faqja</a>
                    <form method="POST" action="{{ route('logout') }}" class="col-span-3">
                        @csrf
                        <button type="submit" class="w-full border-2 border-black bg-[#d02020] px-2 py-2 text-center text-[10px] font-bold uppercase tracking-[0.2em] text-white">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="min-w-0 flex-1 px-4 py-6 sm:px-6 md:px-8 md:py-10">
            {{ $slot }}
        </main>
    </div>
</div>

@livewireScripts
</body>
</html>

