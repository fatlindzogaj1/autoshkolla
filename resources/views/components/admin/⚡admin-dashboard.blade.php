<?php

use Livewire\Component;
use App\Models\Category;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Test;

new #[\Livewire\Attributes\Layout('layouts::admin', ['title' => 'Dashboard'])] class extends Component
{
    public int $totalCategories;
    public int $totalQuestions;
    public int $totalAnswers;
    public int $totalTests;
    public $recentQuestions;

    public function mount(): void
    {
        $this->totalCategories = Category::count();
        $this->totalQuestions = Question::count();
        $this->totalAnswers = Answer::count();
        $this->totalTests = Test::count();
        $this->recentQuestions = Question::with('category')->withCount('answers')->latest()->take(6)->get();
    }

    public function render()
    {
        return $this->view();
    }
};
?>

<div>
    <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4 sm:gap-6">
        <div class="relative overflow-hidden border-4 border-black bg-[#f0c020] p-4 sm:p-6" style="box-shadow:6px 6px 0 0 #121212">
            <div class="absolute right-4 top-4 size-8 rounded-full border-2 border-black bg-white/60"></div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em]">Kategori</p>
            <p class="mt-3 text-5xl font-black uppercase leading-none tracking-[-0.08em] sm:text-6xl">{{ $totalCategories }}</p>
            <a href="{{ route('admin.categories') }}" class="mt-4 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.24em] underline underline-offset-4">Menaxho →</a>
        </div>

        <div class="relative overflow-hidden border-4 border-black bg-[#1040c0] p-4 text-white sm:p-6" style="box-shadow:6px 6px 0 0 #121212">
            <div class="absolute right-4 top-4 size-8 border-2 border-white/60 bg-white/20"></div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-white/70">Pyetje</p>
            <p class="mt-3 text-5xl font-black uppercase leading-none tracking-[-0.08em] sm:text-6xl">{{ $totalQuestions }}</p>
            <a href="{{ route('admin.questions') }}" class="mt-4 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.24em] text-white/80 underline underline-offset-4 hover:text-white">Menaxho →</a>
        </div>

        <div class="relative overflow-hidden border-4 border-black bg-[#d02020] p-4 text-white sm:p-6" style="box-shadow:6px 6px 0 0 #121212">
            <div style="clip-path:polygon(50% 0%,0% 100%,100% 100%)" class="absolute right-3 top-3 size-10 bg-white/30"></div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-white/70">Përgjigje</p>
            <p class="mt-3 text-5xl font-black uppercase leading-none tracking-[-0.08em] sm:text-6xl">{{ $totalAnswers }}</p>
            <a href="{{ route('admin.answers') }}" class="mt-4 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.24em] text-white/80 underline underline-offset-4 hover:text-white">Menaxho →</a>
        </div>

        <div class="relative overflow-hidden border-4 border-black bg-white p-4 sm:p-6" style="box-shadow:6px 6px 0 0 #121212">
            <div class="absolute right-4 top-4 size-8 rotate-45 border-2 border-black bg-[#f0c020]"></div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/50">Teste</p>
            <p class="mt-3 text-5xl font-black uppercase leading-none tracking-[-0.08em] sm:text-6xl">{{ $totalTests }}</p>
            <a href="{{ route('admin.tests') }}" class="mt-4 inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.24em] underline underline-offset-4">Menaxho →</a>
        </div>
    </div>

    <div class="mt-8 sm:mt-10">
        <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">Aktiviteti i fundit</p>
                <h2 class="text-2xl font-black uppercase tracking-[-0.05em]">Pyetjet e fundit</h2>
            </div>
            <a href="{{ route('admin.questions') }}" class="inline-flex items-center gap-2 border-2 border-black bg-white px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] transition hover:bg-[#f0c020]" style="box-shadow:3px 3px 0 0 #121212">Shiko të gjitha →</a>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
            @forelse($recentQuestions as $question)
            <div class="relative border-2 border-black bg-white p-5 transition hover:-translate-y-0.5" style="box-shadow:4px 4px 0 0 #121212">
                <div class="absolute right-4 top-4 size-3 rounded-full border-2 border-black {{ ($loop->index % 3 === 0) ? 'bg-[#d02020]' : (($loop->index % 3 === 1) ? 'bg-[#1040c0]' : 'bg-[#f0c020]') }}"></div>
                <p class="text-[9px] font-bold uppercase tracking-[0.35em] text-black/40">#{{ $question->question_number }} · {{ $question->category?->name ?? 'Pa kategori' }}</p>
                <p class="mt-2 text-sm font-bold leading-snug">{{ Str::limit($question->question_text, 90) }}</p>
                <p class="mt-3 text-[10px] font-bold uppercase tracking-[0.24em] text-black/40">{{ $question->answers_count ?? '—' }} përgjigje</p>
            </div>
            @empty
            <div class="col-span-3 border-2 border-black bg-[#f0f0f0] p-8 text-center">
                <p class="text-sm font-bold uppercase tracking-[0.24em] text-black/50">Nuk ka pyetje akoma.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
