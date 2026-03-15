<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Test — Praktikë Moderne për Patentë</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>

<body class="bauhaus-shell min-h-screen antialiased">
@php($home = url('/'))
<nav class="border-b-4 border-black bg-(--color-bauhaus-canvas)">
    <div class="bauhaus-container py-4 lg:py-5">
        <div class="flex items-center justify-between gap-6">
            <a href="{{ $home }}#hero" class="group inline-flex items-center gap-4" aria-label="Auto Test - kthehu në fillim">
                <span class="flex items-center gap-2">
                    <span class="size-4 rounded-full border-2 border-black bg-(--color-bauhaus-red) lg:size-5"></span>
                    <span class="size-4 border-2 border-black bg-(--color-bauhaus-yellow) lg:size-5"></span>
                    <span class="bauhaus-triangle block size-4 border-2 border-black bg-(--color-bauhaus-blue) lg:size-5"></span>
                </span>

                <span>
                    <span class="block text-lg font-black uppercase tracking-[-0.08em] sm:text-2xl">
                        Auto Test
                    </span>
                    <span class="bauhaus-kicker text-(--color-bauhaus-blue)">
                        Patentë • Ritëm • Saktësi
                    </span>
                </span>
            </a>

            <div class="hidden items-center gap-8 md:flex">
                <a href="{{ $home }}#hero" class="bauhaus-link">Ballina</a>
                <a href="{{ $home }}#metoda" class="bauhaus-link">Metoda</a>
                <a href="{{ $home }}#avantazhet" class="bauhaus-link">Avantazhet</a>
                <a href="{{ $home }}#kontakt" class="bauhaus-link">Kontakt</a>
            </div>

            <div class="hidden items-center gap-3 md:flex">
                <a href="{{ route('testet.index') }}" class="bauhaus-button bauhaus-button--red" wire:navigate>
                    Fillo Praktikën
                </a>

                @guest
                    <a href="{{ route('login') }}" class="bauhaus-button bauhaus-button--outline" wire:navigate>
                        <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                            <circle cx="12" cy="8" r="4"></circle>
                            <path d="M4 20a8 8 0 0 1 16 0"></path>
                        </svg>
                        Login
                    </a>
                @endguest

                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bauhaus-button bauhaus-button--outline">
                            <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                <circle cx="12" cy="8" r="4"></circle>
                                <path d="M4 20a8 8 0 0 1 16 0"></path>
                            </svg>
                            Logout
                        </button>
                    </form>
                @endauth
            </div>

            <details class="relative md:hidden">
                <summary class="bauhaus-menu-button cursor-pointer list-none" aria-label="Hap menunë">
                    Menu
                    <span class="size-3 rounded-full border-2 border-black bg-(--color-bauhaus-yellow)"></span>
                </summary>

                <div class="absolute right-0 top-[calc(100%+1rem)] z-20 min-w-64 border-2 border-black bg-white p-4 shadow-[6px_6px_0px_0px_black]">
                    <div class="flex flex-col gap-4">
                        <a href="{{ $home }}#hero" class="bauhaus-link">Ballina</a>
                        <a href="{{ $home }}#metoda" class="bauhaus-link">Metoda</a>
                        <a href="{{ $home }}#avantazhet" class="bauhaus-link">Avantazhet</a>
                        <a href="{{ $home }}#kontakt" class="bauhaus-link">Kontakt</a>
                        <a href="{{ route('testet.index') }}" class="bauhaus-button bauhaus-button--red w-full" wire:navigate>Fillo Praktikën</a>

                        @guest
                            <a href="{{ route('login') }}" class="bauhaus-button bauhaus-button--outline w-full" wire:navigate>
                                <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <circle cx="12" cy="8" r="4"></circle>
                                    <path d="M4 20a8 8 0 0 1 16 0"></path>
                                </svg>
                                Login
                            </a>
                        @endguest

                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="bauhaus-button bauhaus-button--outline w-full">
                                    <svg class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                        <circle cx="12" cy="8" r="4"></circle>
                                        <path d="M4 20a8 8 0 0 1 16 0"></path>
                                    </svg>
                                    Logout
                                </button>
                            </form>
                        @endauth
                    </div>
                </div>
            </details>
        </div>
    </div>
</nav>

<main>
    {{ $slot }}
</main>

<footer id="kontakt" class="bg-(--color-bauhaus-ink) text-white">
    <div class="bauhaus-container grid gap-8 py-10 lg:grid-cols-[1.4fr_0.8fr_0.8fr] lg:py-14">
        <div class="space-y-4">
            <div class="flex items-center gap-3">
                <span class="size-4 rounded-full bg-(--color-bauhaus-red)"></span>
                <span class="size-4 bg-(--color-bauhaus-yellow)"></span>
                <span class="bauhaus-triangle block size-4 bg-(--color-bauhaus-blue)"></span>
            </div>

            <h2 class="max-w-xl text-3xl font-black uppercase tracking-[-0.06em] sm:text-4xl">
                Mëso rregullat e trafikut me një ritëm që duket i qartë dhe i fortë.
            </h2>

            <p class="max-w-xl text-sm font-medium uppercase tracking-[0.24em] text-white/70 sm:text-base">
                Praktikë e thjeshtë. Strukturë moderne. Fokus total tek provimi teorik.
            </p>
        </div>

        <div class="space-y-4">
            <p class="bauhaus-kicker text-(--color-bauhaus-yellow)">Navigim</p>
            <div class="flex flex-col gap-3 text-sm font-bold uppercase tracking-[0.24em] text-white/80">
                <a href="{{ $home }}#hero" class="transition hover:text-(--color-bauhaus-yellow)">Ballina</a>
                <a href="{{ $home }}#metoda" class="transition hover:text-(--color-bauhaus-yellow)">Metoda</a>
                <a href="{{ $home }}#avantazhet" class="transition hover:text-(--color-bauhaus-yellow)">Avantazhet</a>
            </div>
        </div>

        <div class="space-y-4">
            <p class="bauhaus-kicker text-(--color-bauhaus-red)">Kontakt</p>
            <div class="space-y-2 text-base font-medium text-white/80">
                <p>Prishtinë, Kosovë</p>
                <p>hello@autotest.al</p>
                <p>+383 44 000 000</p>
            </div>
        </div>
    </div>

    <div class="border-t-4 border-white/15 py-4 text-center text-xs font-bold uppercase tracking-[0.35em] text-white/60 sm:text-sm">
        © 2026 Auto Test
    </div>
</footer>

@livewireScripts

</body>
</html>
