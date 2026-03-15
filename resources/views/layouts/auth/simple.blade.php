<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="bauhaus-shell min-h-screen antialiased">
    <div class="flex min-h-svh items-center justify-center px-4 py-8 sm:px-6 md:px-8">
        <div class="w-full max-w-md border-4 border-black bg-white p-6 sm:p-8 bauhaus-shadow-lg">
            <a href="{{ route('home') }}" class="mb-6 inline-flex items-center gap-3 font-black uppercase tracking-[-0.04em]" wire:navigate>
                <span class="size-4 rounded-full border-2 border-black bg-(--color-bauhaus-red)"></span>
                <span class="size-4 border-2 border-black bg-(--color-bauhaus-yellow)"></span>
                <span class="bauhaus-triangle block size-4 border-2 border-black bg-(--color-bauhaus-blue)"></span>
                <span class="text-lg">Auto Test</span>
            </a>

            <div class="flex flex-col gap-6">
                {{ $slot }}
            </div>
        </div>
    </div>

    @fluxScripts
</body>
</html>
