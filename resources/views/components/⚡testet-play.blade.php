<?php

use Livewire\Component;
use App\Models\Test;

new #[\Livewire\Attributes\Layout('layouts::app')] class extends Component {
    public Test $test;
    public int $currentIndex = 0;
    public array $selectedAnswers = [];
    public bool $finished = false;

    public function mount(Test $test): void
    {
        $this->test = $test;
    }

    public function selectAnswer(int $answerId): void
    {
        if ($this->finished) return;

        $question = $this->currentQuestion();
        if (! $question) return;

        $this->selectedAnswers[$question->id] = $answerId;
        $this->resetErrorBag('answer');
    }

    public function previousQuestion(): void
    {
        if ($this->currentIndex > 0) {
            $this->currentIndex--;
            $this->resetErrorBag('answer');
        }
    }

    public function nextQuestion(): void
    {
        if ($this->finished) return;

        $question = $this->currentQuestion();
        if (! $question) return;

        if (! isset($this->selectedAnswers[$question->id])) {
            $this->addError('answer', 'Zgjidh një përgjigje për të vazhduar.');
            return;
        }

        if ($this->currentIndex >= $this->questions()->count() - 1) {
            $this->finished = true;
            return;
        }

        $this->currentIndex++;
        $this->resetErrorBag('answer');
    }

    public function finishNow(): void
    {
        $this->nextQuestion();
    }

    public function restartTest(): void
    {
        $this->currentIndex = 0;
        $this->selectedAnswers = [];
        $this->finished = false;
        $this->resetErrorBag();
    }

    protected function questions()
    {
        return $this->test->questions;
    }

    protected function currentQuestion()
    {
        return $this->questions()->get($this->currentIndex);
    }

    protected function calculateScore(): int
    {
        $score = 0;

        foreach ($this->questions() as $question) {
            $selected = $this->selectedAnswers[$question->id] ?? null;
            $correct = $question->answers->firstWhere('is_correct', true)?->id;

            if ($selected && $correct && (int) $selected === (int) $correct) {
                $score++;
            }
        }

        return $score;
    }

    public function render()
    {
        $this->test->loadMissing([
            'questions' => fn ($q) => $q->orderBy('question_number'),
            'questions.answers' => fn ($q) => $q->orderBy('id'),
        ]);

        $questions = $this->questions();
        $currentQuestion = $this->currentQuestion();

        return $this->view([
            'questions' => $questions,
            'currentQuestion' => $currentQuestion,
            'total' => $questions->count(),
            'score' => $this->calculateScore(),
        ]);
    }
};
?>

<div>
    <section class="bauhaus-section bg-bauhaus-canvas">
        <div class="bauhaus-container space-y-6">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div class="space-y-2">
                    <p class="bauhaus-kicker text-bauhaus-red">Test Aktiv</p>
                    <h1 class="bauhaus-subheading text-2xl sm:text-3xl">{{ $test->name }}</h1>
                </div>

                <a href="{{ route('testet.index') }}" class="bauhaus-button bauhaus-button--outline" wire:navigate>
                    ← Të gjitha testet
                </a>
            </div>

            @if($total === 0)
                <div class="border-4 border-black bg-white p-8 bauhaus-shadow-lg">
                    <p class="text-sm font-bold uppercase tracking-[0.22em] text-black/50">Ky test nuk ka pyetje akoma.</p>
                </div>
            @elseif($finished)
                <div class="space-y-6">
                    @php
                        $percentage = $total > 0 ? round(($score / $total) * 100) : 0;
                        $passed = $percentage >= 75;
                        $radius = 54;
                        $circumference = round(2 * M_PI * $radius, 2);
                        $dash = round($circumference * $percentage / 100, 2);
                        $ringColor = $passed ? '#1040C0' : '#D02020';
                    @endphp

                    <div class="border-4 border-black bg-white bauhaus-shadow-lg">
                        <div class="grid border-b-4 border-black sm:grid-cols-[1fr_auto]">
                            <div class="border-b-4 border-black p-6 sm:border-b-0 sm:border-r-4 sm:p-8">
                                <p class="bauhaus-kicker text-bauhaus-blue">Rezultati</p>
                                <h2 class="mt-3 text-4xl font-black uppercase tracking-[-0.07em] sm:text-5xl">
                                    {{ $score }}<span class="text-2xl text-black/30 sm:text-3xl"> / {{ $total }}</span>
                                </h2>
                                <p class="mt-1 text-sm font-medium text-black/60">pyetje të sakta</p>

                                <span class="mt-4 inline-flex items-center border-2 border-black px-3 py-1 text-xs font-bold uppercase tracking-[0.22em] {{ $passed ? 'bg-bauhaus-blue text-white' : 'bg-bauhaus-red text-white' }}">
                                    {{ $passed ? '✓ Kaluar' : '✗ Mos u dëshpëro' }}
                                </span>

                                <p class="mt-5 text-sm font-medium text-black/70">
                                    @if($passed)
                                        Ke kaluar testin me sukses. Vazhdo të praktikosh për të rritur saktësinë tënde.
                                    @else
                                        Rikthehu te pyetjet që humbe dhe provo sërish — mund ta bësh!
                                    @endif
                                </p>

                                <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                                    <button wire:click="restartTest" class="bauhaus-button bauhaus-button--blue">Rifillo testin</button>
                                    <a href="{{ route('testet.index') }}" class="bauhaus-button bauhaus-button--outline" wire:navigate>Testet tjera</a>
                                </div>
                            </div>

                            <div class="flex items-center justify-center p-6 sm:p-8">
                                <div class="relative flex items-center justify-center">
                                    <svg width="160" height="160" viewBox="0 0 160 160" class="-rotate-90">
                                        <circle
                                            cx="80" cy="80"
                                            r="{{ $radius }}"
                                            fill="none"
                                            stroke="#E0E0E0"
                                            stroke-width="12"
                                        />
                                        <circle
                                            cx="80" cy="80"
                                            r="{{ $radius }}"
                                            fill="none"
                                            stroke="{{ $ringColor }}"
                                            stroke-width="12"
                                            stroke-linecap="square"
                                            stroke-dasharray="{{ $dash }} {{ $circumference }}"
                                        />
                                    </svg>
                                    <div class="absolute inset-0 flex flex-col items-center justify-center">
                                        <span class="text-3xl font-black leading-none tracking-[-0.06em]">{{ $percentage }}<span class="text-lg">%</span></span>
                                        <span class="mt-1 text-[9px] font-bold uppercase tracking-[0.3em] text-black/50">Saktësi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-4">
                        @foreach($questions as $question)
                            @php
                                $selected = $selectedAnswers[$question->id] ?? null;
                                $correct = $question->answers->firstWhere('is_correct', true)?->id;
                                $isOk = $selected && $correct && ((int)$selected === (int)$correct);
                            @endphp
                            <article class="border-4 border-black p-5 sm:p-6 {{ $isOk ? 'bg-white' : 'bg-bauhaus-yellow' }} bauhaus-shadow-sm">
                                <div class="flex items-start justify-between gap-4">
                                    <p class="text-sm font-black uppercase tracking-[0.2em]">Pyetja #{{ $question->question_number }}</p>
                                    <span class="inline-flex items-center border-2 border-black px-3 py-1 text-xs font-bold uppercase {{ $isOk ? 'bg-bauhaus-blue text-white' : 'bg-bauhaus-red text-white' }}">{{ $isOk ? 'Saktë' : 'Gabim' }}</span>
                                </div>
                                <p class="mt-3 text-base font-medium leading-relaxed">{{ $question->question_text }}</p>
                                @if($question->image)
                                    <div class="mt-4 h-48 w-full border-2 border-black bg-bauhaus-canvas p-2 sm:h-64">
                                        <img src="{{ Storage::url($question->image) }}" alt="Foto pyetje" class="h-full w-full object-contain" />
                                    </div>
                                @endif
                                <div class="mt-4 grid gap-3">
                                    @foreach($question->answers as $answer)
                                        @php
                                            $isSelected = ((int)$selected === (int)$answer->id);
                                            $isCorrect = (bool)$answer->is_correct;
                                        @endphp
                                        <div class="border-2 border-black p-3 {{ $isCorrect ? 'bg-bauhaus-blue text-white' : ($isSelected ? 'bg-bauhaus-red text-white' : 'bg-white text-black') }}">
                                            <p class="text-sm font-bold">{{ $answer->answer_text }}</p>
                                            @if($answer->image)
                                                <div class="mt-2 h-28 w-full border-2 border-black bg-bauhaus-canvas p-1.5 sm:h-32">
                                                    <img src="{{ Storage::url($answer->image) }}" alt="Foto përgjigje" class="h-full w-full object-contain" />
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="space-y-6">
                    <div class="flex items-center justify-between border-2 border-black bg-white p-3 bauhaus-shadow-sm">
                        <p class="text-xs font-bold uppercase tracking-[0.22em]">Pyetja {{ $currentIndex + 1 }} / {{ $total }}</p>
                        <div class="h-3 w-40 border-2 border-black bg-bauhaus-muted sm:w-64">
                            <div class="h-full bg-bauhaus-blue" style="width: {{ (($currentIndex + 1) / max(1, $total)) * 100 }}%"></div>
                        </div>
                    </div>

                    @if($currentQuestion)
                        <article class="border-4 border-black bg-white p-5 sm:p-8 bauhaus-shadow-lg">
                            <p class="bauhaus-kicker text-bauhaus-blue">Pyetja #{{ $currentQuestion->question_number }}</p>
                            <h2 class="mt-3 text-xl font-black uppercase tracking-[-0.04em] sm:text-2xl">{{ $currentQuestion->question_text }}</h2>
                            @if($currentQuestion->image)
                                <div class="mt-5 h-56 w-full border-4 border-black bg-bauhaus-canvas p-2 sm:h-80">
                                    <img src="{{ Storage::url($currentQuestion->image) }}" alt="Foto pyetje" class="h-full w-full object-contain" />
                                </div>
                            @endif
                            <div class="mt-6 grid gap-3">
                                @foreach($currentQuestion->answers as $answer)
                                    @php($isSelected = ((int)($selectedAnswers[$currentQuestion->id] ?? 0) === (int)$answer->id))
                                    <button type="button" wire:click="selectAnswer({{ $answer->id }})" class="w-full border-2 border-black p-4 text-left transition {{ $isSelected ? 'bg-bauhaus-blue text-white' : 'bg-white hover:bg-bauhaus-canvas' }}">
                                        <p class="text-sm font-bold">{{ $answer->answer_text }}</p>
                                        @if($answer->image)
                                            <div class="mt-3 h-28 w-full border-2 border-black bg-bauhaus-canvas p-1.5 sm:h-40">
                                                <img src="{{ Storage::url($answer->image) }}" alt="Foto përgjigje" class="h-full w-full object-contain" />
                                            </div>
                                        @endif
                                    </button>
                                @endforeach
                            </div>

                            @error('answer')
                                <p class="mt-4 text-sm font-bold text-bauhaus-red">{{ $message }}</p>
                            @enderror

                            <div class="mt-6 flex flex-col gap-3 sm:flex-row sm:justify-between">
                                <button type="button" wire:click="previousQuestion" class="bauhaus-button bauhaus-button--outline" @disabled($currentIndex === 0)>← Para</button>

                                @if($currentIndex + 1 < $total)
                                    <button type="button" wire:click="nextQuestion" class="bauhaus-button bauhaus-button--red">Tjetra →</button>
                                @else
                                    <button type="button" wire:click="finishNow" class="bauhaus-button bauhaus-button--yellow">Përfundo testin</button>
                                @endif
                            </div>
                        </article>
                    @endif
                </div>
            @endif
        </div>
    </section>
</div>



