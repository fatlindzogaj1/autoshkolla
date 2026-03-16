<?php

use App\Http\Requests\TestRequest;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Test;
use App\Models\Question;

new #[\Livewire\Attributes\Layout('layouts::admin', ['title' => 'Testet'])]
class extends Component {
    use WithPagination;

    public string $search = '';
    public bool $showForm = false;
    public ?int $editingId = null;
    public ?int $confirmDeleteId = null;
    public ?int $managingId = null;

    public string $name = '';
    public array $selectedQuestions = [];

    public function rules(): array
    {
        return (new TestRequest())->rules();
    }

    public function openCreate(): void
    {
        $this->reset('name', 'selectedQuestions', 'editingId', 'managingId');
        $this->showForm = true;
    }

    public function openEdit(Test $test): void
    {
        $this->editingId = $test->id;
        $this->name = $test->name;
        $this->selectedQuestions = $test->questions()->pluck('questions.id')->map(fn($id) => (string)$id)->toArray();
        $this->showForm = true;
        $this->managingId = null;
    }

    public function save(): void
    {
        $this->validate();
        if ($this->editingId) {
            $test = Test::findOrFail($this->editingId);
            $test->update(['name' => $this->name]);
        } else {
            $test = Test::create(['name' => $this->name]);
        }
        $test->questions()->sync($this->selectedQuestions);
        $this->reset('name', 'selectedQuestions', 'editingId', 'showForm');
        $this->resetPage();
    }

    public function openManage(Test $test): void
    {
        $this->managingId = $test->id;
        $this->selectedQuestions = $test->questions()->pluck('questions.id')->map(fn($id) => (string)$id)->toArray();
        $this->showForm = false;
    }

    public function syncQuestions(): void
    {
        if ($this->managingId) {
            Test::findOrFail($this->managingId)->questions()->sync($this->selectedQuestions);
        }
        $this->managingId = null;
        $this->selectedQuestions = [];
    }

    public function confirmDelete(int $id): void
    {
        $this->confirmDeleteId = $id;
    }

    public function delete(): void
    {
        if ($this->confirmDeleteId) {
            $test = Test::findOrFail($this->confirmDeleteId);
            $test->questions()->detach();
            $test->delete();

        }
        $this->confirmDeleteId = null;
        $this->resetPage();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $tests = Test::query()
            ->withCount('questions')
            ->when($this->search, fn($q) => $q->where('name', 'like', "%{$this->search}%"))
            ->orderBy('name')
            ->paginate(12);

        $allQuestions = Question::orderBy('question_number')->get(['id', 'question_number', 'question_text']);
        $managingTest = $this->managingId ? Test::find($this->managingId) : null;

        return $this->view(['tests' => $tests, 'allQuestions' => $allQuestions, 'managingTest' => $managingTest]);
    }
};
?>

<div>
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">Menaxhim</p>
            <h2 class="text-3xl font-black uppercase tracking-[-0.06em]">Testet</h2>
        </div>
        <button wire:click="openCreate"
                class="inline-flex items-center gap-2 border-2 border-black bg-[#121212] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white transition active:translate-x-[2px] active:translate-y-[2px]"
                style="box-shadow:4px 4px 0 0 #d02020">
            + Shto test
        </button>
    </div>

    <div class="mb-6">
        <input wire:model.live.debounce.300ms="search" type="search" placeholder="Kërko teste…"
               class="w-full border-2 border-black bg-white px-4 py-3 text-sm font-medium placeholder-black/30 outline-none focus:border-[#121212]"
               style="box-shadow:3px 3px 0 0 #121212"/>
    </div>

    @if($showForm)
        <div class="mb-8 border-4 border-black bg-[#121212] p-6 text-white" style="box-shadow:6px 6px 0 0 #d02020">
            <h3 class="mb-5 text-lg font-black uppercase tracking-[-0.04em]">{{ $editingId ? 'Ndrysho testin' : 'Test i ri' }}</h3>
            <form wire:submit="save" class="space-y-5">
                <div>
                    <label class="mb-1 block text-[10px] font-bold uppercase tracking-[0.3em] text-white/60">Emri i
                        testit *</label>
                    <input wire:model="name" type="text" placeholder="p.sh. Test 01 – Rregullat bazike"
                           class="w-full border-2 border-white/30 bg-white/10 px-4 py-3 text-sm font-medium text-white placeholder-white/30 outline-none focus:border-[#f0c020]"/>
                    @error('name') <p class="mt-1 text-xs font-bold text-[#f0c020]">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="mb-2 block text-[10px] font-bold uppercase tracking-[0.3em] text-white/60">Pyetjet e
                        përfshira</label>
                    <div class="max-h-56 overflow-y-auto border-2 border-white/20 bg-white/5 p-3">
                        @foreach($allQuestions as $q)
                            <label class="flex cursor-pointer items-start gap-3 py-2 hover:bg-white/5">
                                <input type="checkbox" wire:model="selectedQuestions" value="{{ $q->id }}"
                                       class="mt-0.5 border-2 border-white/40 bg-transparent accent-[#f0c020]"/>
                                <span class="text-xs font-medium text-white/80"><strong
                                        class="text-white">#{{ $q->question_number }}</strong> — {{ Str::limit($q->question_text, 70) }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="flex gap-3">
                    <button type="submit"
                            class="border-2 border-white bg-[#f0c020] px-6 py-3 text-xs font-bold uppercase tracking-[0.22em] text-black"
                            style="box-shadow:3px 3px 0 0 #d02020">{{ $editingId ? 'Ruaj ndryshimet' : 'Krijo testin' }}</button>
                    <button type="button" wire:click="$set('showForm', false)"
                            class="border-2 border-white/30 bg-white/10 px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white">
                        Anulo
                    </button>
                </div>
            </form>
        </div>
    @endif

    @if($managingTest)
        <div class="mb-8 border-4 border-black bg-[#f0c020] p-6" style="box-shadow:6px 6px 0 0 #121212">
            <div class="mb-4 flex items-center justify-between">
                <h3 class="text-lg font-black uppercase tracking-[-0.04em]">Pyetjet e testit: <span
                        class="text-[#d02020]">{{ $managingTest->name }}</span></h3>
                <button wire:click="$set('managingId', null)"
                        class="text-xs font-bold uppercase tracking-[0.22em] underline">Mbyll
                </button>
            </div>
            <div class="mb-4 max-h-64 overflow-y-auto border-2 border-black bg-white p-3">
                @foreach($allQuestions as $q)
                    <label class="flex cursor-pointer items-start gap-3 py-2 hover:bg-[#f0f0f0]">
                        <input type="checkbox" wire:model="selectedQuestions" value="{{ $q->id }}"
                               class="mt-0.5 accent-[#1040c0]"/>
                        <span class="text-xs font-medium"><strong>#{{ $q->question_number }}</strong> — {{ Str::limit($q->question_text, 80) }}</span>
                    </label>
                @endforeach
            </div>
            <button wire:click="syncQuestions"
                    class="border-2 border-black bg-[#1040c0] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white"
                    style="box-shadow:3px 3px 0 0 #121212">Ruaj pyetjet
            </button>
        </div>
    @endif

    <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-3">
        @forelse($tests as $test)
            <div class="relative border-4 border-black bg-white p-6 transition hover:-translate-y-0.5"
                 style="box-shadow:6px 6px 0 0 #121212">
                <div
                    class="absolute right-5 top-5 size-4 rotate-45 border-2 border-black {{ ($loop->index % 3 === 0) ? 'bg-[#d02020]' : (($loop->index % 3 === 1) ? 'bg-[#1040c0]' : 'bg-[#f0c020]') }}"></div>
                <p class="text-[9px] font-bold uppercase tracking-[0.35em] text-black/40">Test #{{ $test->id }}</p>
                <h3 class="mt-2 text-xl font-black uppercase tracking-[-0.05em] leading-tight">{{ $test->name }}</h3>
                <div class="mt-4 flex items-center gap-2">
                    <span
                        class="inline-flex size-9 items-center justify-center rounded-full border-2 border-black bg-[#f0c020] text-sm font-black">{{ $test->questions_count }}</span>
                    <span class="text-xs font-bold uppercase tracking-[0.22em] text-black/50">pyetje</span>
                </div>
                <div class="mt-5 flex flex-wrap gap-2">
                    <button wire:click="openManage({{ $test->id }})"
                            class="border-2 border-black bg-[#f0c020] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em]"
                            style="box-shadow:2px 2px 0 0 #121212">Pyetjet
                    </button>
                    <button wire:click="openEdit({{ $test->id }})"
                            class="border-2 border-black bg-[#1040c0] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white"
                            style="box-shadow:2px 2px 0 0 #121212">Ndrysho
                    </button>
                    <button wire:click="confirmDelete({{ $test->id }})"
                            class="border-2 border-black bg-[#d02020] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white"
                            style="box-shadow:2px 2px 0 0 #121212">Fshi
                    </button>
                </div>
            </div>
        @empty
            <div class="col-span-3 border-4 border-black bg-[#f0f0f0] p-10 text-center">
                <p class="text-sm font-bold uppercase tracking-[0.24em] text-black/40">Nuk ka teste. Shto të parën!</p>
            </div>
        @endforelse
    </div>
    <div class="mt-8">{{ $tests->links() }}</div>

    @if($confirmDeleteId)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60">
            <div class="w-full max-w-sm border-4 border-black bg-white p-8" style="box-shadow:8px 8px 0 0 #d02020">
                <h3 class="text-xl font-black uppercase tracking-[-0.04em]">Konfirmo fshirjen</h3>
                <p class="mt-3 text-sm font-medium text-black/70">Testi dhe lidhjet me pyetje do të fshihen.</p>
                <div class="mt-6 flex gap-3">
                    <button wire:click="delete"
                            class="border-2 border-black bg-[#d02020] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white"
                            style="box-shadow:3px 3px 0 0 #121212">Po, fshi
                    </button>
                    <button wire:click="$set('confirmDeleteId', null)"
                            class="border-2 border-black bg-white px-5 py-3 text-xs font-bold uppercase tracking-[0.22em]"
                            style="box-shadow:3px 3px 0 0 #121212">Anulo
                    </button>
                </div>
            </div>
        </div>
    @endif
</div>
