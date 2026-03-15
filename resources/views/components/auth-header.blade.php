@props([
    'title',
    'description',
])

<div class="flex w-full flex-col gap-2 text-center">
    <h1 class="bauhaus-subheading text-2xl sm:text-3xl">{{ $title }}</h1>
    <p class="text-sm font-medium leading-relaxed text-black/70">{{ $description }}</p>
</div>
