<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Answer;
use App\Models\Question;

new #[\Livewire\Attributes\Layout('layouts::admin', ['title' => 'Përgjigjet'])] class extends Component
{
    use WithPagination;

    public string $search = '';
    public string $filterQuestion = '';
    public string $filterCorrect = '';
    public ?int $confirmDeleteId = null;

    public function confirmDelete(int $id): void
    {
        $this->confirmDeleteId = $id;
    }

    public function delete(): void
    {
        if ($this->confirmDeleteId) {
            Answer::findOrFail($this->confirmDeleteId)->delete();
        }
        $this->confirmDeleteId = null;
        $this->resetPage();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedFilterQuestion(): void
    {
        $this->resetPage();
    }

    public function updatedFilterCorrect(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $answers = Answer::query()
            ->with('question.category')
            ->when($this->search, fn ($q) => $q->where('answer_text', 'like', "%{$this->search}%"))
            ->when($this->filterQuestion, fn ($q) => $q->where('question_id', $this->filterQuestion))
            ->when($this->filterCorrect !== '', fn ($q) => $q->where('is_correct', (bool) $this->filterCorrect))
            ->latest()
            ->paginate(20);

        $questions = Question::orderBy('question_number')->get(['id', 'question_number', 'question_text']);

        return $this->view(compact('answers', 'questions'));
    }
};
?>

<div>
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
        <div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">Menaxhim</p>
            <h2 class="text-3xl font-black uppercase tracking-[-0.06em]">Përgjigjet</h2>
            <p class="mt-1 text-sm font-medium text-black/50">
                Krijo ose ndrysho përgjigjet përmes faqes
                <a href="{{ route('admin.questions') }}" class="font-bold text-[#1040c0] underline underline-offset-2 hover:text-[#d02020]">Pyetjet</a>.
            </p>
        </div>

        <a href="{{ route('admin.questions') }}" class="inline-flex items-center gap-2 border-2 border-black bg-[#1040c0] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white transition active:translate-x-[2px] active:translate-y-[2px]" style="box-shadow:4px 4px 0 0 #121212">
            + Shto pyetje & përgjigje
        </a>
    </div>

    <div class="mb-6 grid gap-3 sm:grid-cols-3">
        <input wire:model.live.debounce.300ms="search" type="search" placeholder="Kërko tekst përgjigje…" class="border-2 border-black bg-white px-4 py-3 text-sm font-medium placeholder-black/30 outline-none focus:border-[#d02020]" style="box-shadow:3px 3px 0 0 #121212" />

        <select wire:model.live="filterQuestion" class="border-2 border-black bg-white px-4 py-3 text-sm font-bold outline-none focus:border-[#d02020]" style="box-shadow:3px 3px 0 0 #121212">
            <option value="">Të gjitha pyetjet</option>
            @foreach($questions as $q)
                <option value="{{ $q->id }}">#{{ $q->question_number }} – {{ Str::limit($q->question_text, 45) }}</option>
            @endforeach
        </select>

        <select wire:model.live="filterCorrect" class="border-2 border-black bg-white px-4 py-3 text-sm font-bold outline-none focus:border-[#d02020]" style="box-shadow:3px 3px 0 0 #121212">
            <option value="">Të gjitha (sakte + jo)</option>
            <option value="1">✓ Vetëm të saktat</option>
            <option value="0">✗ Vetëm jo të saktat</option>
        </select>
    </div>

    <div class="overflow-x-auto border-4 border-black" style="box-shadow:6px 6px 0 0 #121212">
        <table class="w-full min-w-[640px] border-collapse bg-white text-sm">
            <thead class="border-b-4 border-black bg-[#121212] text-white">
                <tr>
                    <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">Përgjigja</th>
                    <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">Pyetja</th>
                    <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">Kategoria</th>
                    <th class="px-5 py-4 text-center text-[10px] font-bold uppercase tracking-[0.3em]">Saktë</th>
                    <th class="px-5 py-4 text-right text-[10px] font-bold uppercase tracking-[0.3em]">Veprime</th>
                </tr>
            </thead>
            <tbody>
                @forelse($answers as $ans)
                <tr class="border-b-2 border-black/10 transition hover:bg-[#f0f0f0] {{ $ans->is_correct ? 'bg-[#1040c0]/5' : '' }}">
                    <td class="px-5 py-4">
                        <div class="flex items-start gap-3">
                            @if($ans->image)
                                <img src="{{ Storage::url($ans->image) }}" alt="Foto përgjigje" class="mt-0.5 size-8 shrink-0 border-2 border-black object-cover" />
                            @endif
                            <span class="font-medium leading-snug">{{ Str::limit($ans->answer_text, 65) }}</span>
                        </div>
                    </td>

                    <td class="px-5 py-4">
                        <div class="flex items-start gap-2">
                            @if($ans->question?->image)
                                <img src="{{ Storage::url($ans->question->image) }}" alt="Foto pyetje" class="mt-0.5 size-6 shrink-0 border border-black/30 object-cover" />
                            @endif
                            <span class="text-xs font-bold text-black/60">
                                #{{ $ans->question?->question_number }}
                                <span class="block font-medium text-black/40">{{ Str::limit($ans->question?->question_text, 40) }}</span>
                            </span>
                        </div>
                    </td>

                    <td class="px-5 py-4">
                        <span class="inline-block border-2 border-black bg-[#f0c020] px-2 py-0.5 text-[10px] font-bold uppercase tracking-[0.2em]">{{ $ans->question?->category?->name ?? '—' }}</span>
                    </td>

                    <td class="px-5 py-4 text-center">
                        @if($ans->is_correct)
                            <span class="inline-flex size-7 items-center justify-center rounded-full border-2 border-black bg-[#1040c0] text-xs font-black text-white">✓</span>
                        @else
                            <span class="inline-flex size-7 items-center justify-center rounded-full border-2 border-black/20 bg-[#f0f0f0] text-xs font-black text-black/30">✗</span>
                        @endif
                    </td>

                    <td class="px-5 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.questions') }}" class="border-2 border-black bg-[#1040c0] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white" style="box-shadow:2px 2px 0 0 #121212" title="Edito pyetjen dhe përgjigjet">Ndrysho →</a>
                            <button wire:click="confirmDelete({{ $ans->id }})" class="border-2 border-black bg-[#d02020] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white" style="box-shadow:2px 2px 0 0 #121212">Fshi</button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-5 py-10 text-center text-xs font-bold uppercase tracking-[0.24em] text-black/40">Nuk ka përgjigje. Shto nga faqja e Pyetjeve!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $answers->links() }}</div>

    @if($confirmDeleteId)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60">
        <div class="w-full max-w-sm border-4 border-black bg-white p-8" style="box-shadow:8px 8px 0 0 #d02020">
            <h3 class="text-xl font-black uppercase tracking-[-0.04em]">Konfirmo fshirjen</h3>
            <p class="mt-3 text-sm font-medium text-black/70">Kjo përgjigje do të fshihet përgjithmonë.</p>
            <div class="mt-6 flex gap-3">
                <button wire:click="delete" class="border-2 border-black bg-[#d02020] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white" style="box-shadow:3px 3px 0 0 #121212">Po, fshi</button>
                <button wire:click="$set('confirmDeleteId', null)" class="border-2 border-black bg-white px-5 py-3 text-xs font-bold uppercase tracking-[0.22em]" style="box-shadow:3px 3px 0 0 #121212">Anulo</button>
            </div>
        </div>
    </div>
    @endif
</div>
