<?php

use Livewire\Component;
use App\Models\Test;

new #[\Livewire\Attributes\Layout('layouts::app')] class extends Component {
    public function render()
    {
        $tests = Test::query()
            ->withCount('questions')
            ->orderBy('name')
            ->get();

        return $this->view(['tests' => $tests]);
    }
};
?>

<div>
    <section class="bauhaus-section bg-(--color-bauhaus-canvas)">
        <div class="bauhaus-container space-y-8">
            <div class="max-w-3xl space-y-4">
                <p class="bauhaus-kicker text-bauhaus-blue">Testet</p>
                <h1 class="bauhaus-display text-4xl sm:text-6xl lg:text-7xl">Zgjidh testin dhe fillo praktikën.</h1>
                <p class="text-base font-medium leading-relaxed text-black/75 sm:text-lg">
                    Këtu i ke të gjitha testet e gatshme. Hape një test dhe përgjigju pyetjeve një nga një.
                </p>
            </div>

            @if($tests->isEmpty())
                <div class="border-4 border-black bg-white p-8 bauhaus-shadow-lg">
                    <p class="text-sm font-bold uppercase tracking-[0.22em] text-black/50">Nuk ka teste të publikuara akoma.</p>
                </div>
            @else
                <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach($tests as $test)
                        <article class="bauhaus-card bauhaus-shadow-lg">
                            <div class="absolute right-4 top-4 size-4 rotate-45 border-2 border-black {{ $loop->index % 3 === 0 ? 'bg-bauhaus-red' : ($loop->index % 3 === 1 ? 'bg-bauhaus-blue' : 'bg-bauhaus-yellow') }}"></div>
                            <p class="bauhaus-kicker text-black/50">Test #{{ $test->id }}</p>
                            <h2 class="mt-3 text-2xl font-black uppercase tracking-[-0.05em]">{{ $test->name }}</h2>
                            <p class="mt-4 text-sm font-medium text-black/70">{{ $test->questions_count }} pyetje në këtë test.</p>

                            <a href="{{ route('testet.play', $test) }}" class="mt-6 bauhaus-button bauhaus-button--blue w-full" wire:navigate>
                                Nis testin
                                <span aria-hidden="true">→</span>
                            </a>
                        </article>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</div>
