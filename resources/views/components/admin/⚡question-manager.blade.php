<?php

use App\Http\Requests\QuestionRequest;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Category;

new #[\Livewire\Attributes\Layout('layouts::admin', ['title' => 'Pyetjet'])]
class extends Component {
    use WithPagination, WithFileUploads;

    public string $search = '';
    public string $filterCategory = '';

    public bool $showModal = false;
    public ?int $editingId = null;
    public ?int $confirmDeleteId = null;

    public string $question_text = '';
    public string $question_number = '';
    public string $category_id = '';
    public $questionImage = null;
    public ?string $existingImage = null;

    private const MIN_ANSWERS = 2;
    public int $minAnswers = self::MIN_ANSWERS;

    public array $answers = [
        ['answer_text' => '', 'is_correct' => true, 'image' => null, 'existingImg' => null],
        ['answer_text' => '', 'is_correct' => false, 'image' => null, 'existingImg' => null],
    ];


    protected function rules(): array
    {
        $rules = (new QuestionRequest())->rules();
        $rules['answers'] .= '|min:' . self::MIN_ANSWERS;
        return $rules;
    }

    public function openCreate(): void
    {
        $this->resetModal();
        $this->showModal = true;
    }

    public function openEdit(Question $question): void
    {
        $this->editingId = $question->id;
        $this->question_text = $question->question_text;
        $this->question_number = (string)$question->question_number;
        $this->category_id = (string)$question->category_id;
        $this->existingImage = $question->image;
        $this->questionImage = null;

        $existing = $question->answers()->get();
        $this->answers = [];
        foreach ($existing as $ans) {
            $this->answers[] = [
                'id' => $ans->id,
                'answer_text' => $ans->answer_text,
                'is_correct' => (bool)$ans->is_correct,
                'image' => null,
                'existingImg' => $ans->image,
            ];
        }
        while (count($this->answers) < self::MIN_ANSWERS) {
            $this->answers[] = ['answer_text' => '', 'is_correct' => false, 'image' => null, 'existingImg' => null];
        }

        if (count(array_filter($this->answers, fn($a) => !empty($a['is_correct']))) !== 1) {
            foreach ($this->answers as $i => $ans) {
                $this->answers[$i]['is_correct'] = $i === 0;
            }
        }

        $this->showModal = true;
    }

    public function closeModal(): void
    {
        $this->showModal = false;
        $this->resetModal();
    }

    private function resetModal(): void
    {
        $this->reset('question_text', 'question_number', 'category_id', 'questionImage', 'existingImage', 'editingId');
        $this->answers = [
            ['answer_text' => '', 'is_correct' => true, 'image' => null, 'existingImg' => null],
            ['answer_text' => '', 'is_correct' => false, 'image' => null, 'existingImg' => null],
        ];
        $this->resetValidation();
    }

    public function updatedAnswers($value, $key): void
    {
        if (str_ends_with($key, '.is_correct') && $value) {
            $idx = (int)explode('.', $key)[0];
            foreach ($this->answers as $i => $ans) {
                if ($i !== $idx) {
                    $this->answers[$i]['is_correct'] = false;
                }
            }
        }
    }

    public function addAnswer(): void
    {
        $this->answers[] = ['answer_text' => '', 'is_correct' => false, 'image' => null, 'existingImg' => null];
    }

    public function removeAnswer(int $index): void
    {
        if (count($this->answers) <= self::MIN_ANSWERS) {
            return;
        }

        $removedWasCorrect = !empty($this->answers[$index]['is_correct']);
        unset($this->answers[$index]);
        $this->answers = array_values($this->answers);

        if ($removedWasCorrect && !collect($this->answers)->contains(fn($a) => !empty($a['is_correct']))) {
            $this->answers[0]['is_correct'] = true;
        }
    }

    public function save(): void
    {
        $this->validate();

        $correctCount = collect($this->answers)->filter(fn($a) => !empty($a['is_correct']))->count();
        if ($correctCount !== 1) {
            $this->addError('answers', 'Duhet te zgjedhesh saktesisht nje pergjigje te sakte.');
            return;
        }

        $imagePath = $this->existingImage;
        if ($this->questionImage) {
            $imagePath = $this->questionImage->store('questions', 'public');
        }

        if ($this->editingId) {
            $question = Question::findOrFail($this->editingId);
            $question->update([
                'question_text' => $this->question_text,
                'question_number' => $this->question_number,
                'category_id' => $this->category_id,
                'image' => $imagePath,
            ]);
        } else {
            $question = Question::create([
                'question_text' => $this->question_text,
                'question_number' => $this->question_number,
                'category_id' => $this->category_id,
                'image' => $imagePath,
            ]);
        }

        $keepIds = [];
        foreach ($this->answers as $slot) {
            if (trim($slot['answer_text']) === '') continue;

            $ansImgPath = $slot['existingImg'] ?? null;
            $uploadedImage = $slot['image'] ?? null;
            if (is_object($uploadedImage) && method_exists($uploadedImage, 'store')) {
                $ansImgPath = $uploadedImage->store('answers', 'public');
            }

            if (!empty($slot['id'])) {
                $ans = Answer::findOrFail($slot['id']);
                $ans->update([
                    'answer_text' => $slot['answer_text'],
                    'is_correct' => $slot['is_correct'],
                    'image' => $ansImgPath,
                ]);
                $keepIds[] = $ans->id;
            } else {
                $ans = $question->answers()->create([
                    'answer_text' => $slot['answer_text'],
                    'is_correct' => $slot['is_correct'],
                    'image' => $ansImgPath,
                ]);
                $keepIds[] = $ans->id;
            }
        }

        $question->answers()->whereNotIn('id', $keepIds)->delete();

        $this->closeModal();
        $this->resetPage();
    }

    public function confirmDelete(int $id): void
    {
        $this->confirmDeleteId = $id;
    }

    public function delete(): void
    {
        if ($this->confirmDeleteId) {
            Question::findOrFail($this->confirmDeleteId)->delete();
        }
        $this->confirmDeleteId = null;
        $this->resetPage();
    }

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedFilterCategory(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $questions = Question::query()
            ->with('category')
            ->withCount('answers')
            ->when($this->search, fn($q) => $q->where('question_text', 'like', "%{$this->search}%")
                ->orWhere('question_number', 'like', "%{$this->search}%"))
            ->when($this->filterCategory, fn($q) => $q->where('category_id', $this->filterCategory))
            ->orderBy('question_number')
            ->paginate(15);

        $categories = Category::orderBy('name')->get();

        return $this->view(compact('questions', 'categories'));
    }
};
?>

<div>
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">Menaxhim</p>
            <h2 class="text-3xl font-black uppercase tracking-[-0.06em]">Pyetjet & Përgjigjet</h2>
        </div>
        <button wire:click="openCreate" class="inline-flex items-center gap-2 border-2 border-black bg-[#1040c0] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white transition active:translate-x-[2px] active:translate-y-[2px]" style="box-shadow:4px 4px 0 0 #121212">
            + Shto pyetje
        </button>
    </div>

    <div class="mb-6 flex flex-col gap-3 sm:flex-row">
        <input wire:model.live.debounce.300ms="search" type="search" placeholder="Kërko pyetje ose numër…" class="flex-1 border-2 border-black bg-white px-4 py-3 text-sm font-medium placeholder-black/30 outline-none focus:border-[#1040c0]" style="box-shadow:3px 3px 0 0 #121212"/>
        <select wire:model.live="filterCategory" class="border-2 border-black bg-white px-4 py-3 text-sm font-bold outline-none focus:border-[#1040c0]" style="box-shadow:3px 3px 0 0 #121212">
            <option value="">Të gjitha kategoritë</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="overflow-auto border-4 border-black" style="box-shadow:6px 6px 0 0 #121212">
        <table class="w-full min-w-[700px] border-collapse bg-white text-sm">
            <thead class="border-b-4 border-black bg-[#121212] text-white">
            <tr>
                <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">Nr.</th>
                <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">Pyetja</th>
                <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">Kategoria</th>
                <th class="px-5 py-4 text-center text-[10px] font-bold uppercase tracking-[0.3em]">Përgjigje</th>
                <th class="px-5 py-4 text-right text-[10px] font-bold uppercase tracking-[0.3em]">Veprime</th>
            </tr>
            </thead>
            <tbody>
            @forelse($questions as $q)
                <tr class="border-b-2 border-black/10 transition hover:bg-[#f0f0f0]">
                    <td class="px-5 py-4 font-black text-black/40">#{{ $q->question_number }}</td>
                    <td class="px-5 py-4 font-medium leading-snug">
                        <div class="flex items-start gap-3">
                            @if($q->image)
                                <img src="{{ Storage::url($q->image) }}" alt="Foto pyetje" class="mt-0.5 size-8 shrink-0 border-2 border-black object-cover"/>
                            @endif
                            {{ Str::limit($q->question_text, 75) }}
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <span class="inline-block border-2 border-black bg-[#f0c020] px-2 py-0.5 text-[10px] font-bold uppercase tracking-[0.2em]">{{ $q->category?->name ?? '—' }}</span>
                    </td>
                    <td class="px-5 py-4 text-center">
                        <span class="inline-flex size-8 items-center justify-center rounded-full border-2 border-black bg-[#1040c0] text-xs font-black text-white">{{ $q->answers_count }}</span>
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <button wire:click="openEdit({{ $q->id }})" class="border-2 border-black bg-[#1040c0] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white" style="box-shadow:2px 2px 0 0 #121212">Ndrysho</button>
                            <button wire:click="confirmDelete({{ $q->id }})" class="border-2 border-black bg-[#d02020] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white" style="box-shadow:2px 2px 0 0 #121212">Fshi</button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-5 py-10 text-center text-xs font-bold uppercase tracking-[0.24em] text-black/40">Nuk ka pyetje. Shto të parën!</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-6">{{ $questions->links() }}</div>

    @if($showModal)
        <div class="fixed inset-0 z-50 flex items-start justify-center overflow-y-auto bg-black/70 px-4 py-8" wire:keydown.escape="closeModal">
            <div class="absolute inset-0" wire:click="closeModal"></div>
            <div class="relative z-10 w-full max-w-3xl border-4 border-black bg-white" style="box-shadow:10px 10px 0 0 #121212">
                <div class="flex items-center justify-between border-b-4 border-black bg-[#1040c0] px-6 py-5">
                    <div>
                        <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-white/60">{{ $editingId ? 'Redakto' : 'E re' }}</p>
                        <h3 class="text-xl font-black uppercase tracking-[-0.05em] text-white">Pyetja & Përgjigjet</h3>
                    </div>
                    <button wire:click="closeModal" class="flex size-10 items-center justify-center border-2 border-white/40 text-white transition hover:bg-white/20 text-xl font-black">✕</button>
                </div>

                <form wire:submit="save" class="divide-y-4 divide-black">
                    <div class="bg-[#f0f0f0] p-6">
                        <p class="mb-4 text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">① Detajet e pyetjes</p>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label class="mb-1 block text-[10px] font-bold uppercase tracking-[0.3em] text-black/60">Nr. pyetjes *</label>
                                <input wire:model="question_number" type="number" placeholder="p.sh. 1001" class="w-full border-2 border-black bg-white px-4 py-3 text-sm font-medium outline-none focus:border-[#1040c0]" style="box-shadow:3px 3px 0 0 #121212"/>
                                @error('question_number') <p class="mt-1 text-xs font-bold text-[#d02020]">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <label class="mb-1 block text-[10px] font-bold uppercase tracking-[0.3em] text-black/60">Kategoria *</label>
                                <select wire:model="category_id" class="w-full border-2 border-black bg-white px-4 py-3 text-sm font-medium outline-none focus:border-[#1040c0]" style="box-shadow:3px 3px 0 0 #121212">
                                    <option value="">Zgjidh…</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <p class="mt-1 text-xs font-bold text-[#d02020]">{{ $message }}</p> @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label class="mb-1 block text-[10px] font-bold uppercase tracking-[0.3em] text-black/60">Teksti i pyetjes *</label>
                                <textarea wire:model="question_text" rows="3" placeholder="Shkruaj pyetjen…" class="w-full border-2 border-black bg-white px-4 py-3 text-sm font-medium outline-none focus:border-[#1040c0]" style="box-shadow:3px 3px 0 0 #121212"></textarea>
                                @error('question_text') <p class="mt-1 text-xs font-bold text-[#d02020]">{{ $message }}</p> @enderror
                            </div>

                            <div class="sm:col-span-2">
                                <label class="mb-1 block text-[10px] font-bold uppercase tracking-[0.3em] text-black/60">Foto pyetjes (opsionale)</label>
                                <div class="flex items-start gap-4">
                                    @if($existingImage)
                                        <div class="shrink-0">
                                            <img src="{{ Storage::url($existingImage) }}" alt="Foto pyetje aktuale" class="size-16 border-2 border-black object-cover"/>
                                            <p class="mt-1 text-[9px] font-bold uppercase tracking-[0.2em] text-black/40">Aktuale</p>
                                        </div>
                                    @endif
                                    <div class="flex-1">
                                        <input wire:model="questionImage" type="file" accept="image/*" class="w-full border-2 border-black bg-white px-3 py-2.5 text-xs font-medium" style="box-shadow:3px 3px 0 0 #121212"/>
                                        @error('questionImage') <p class="mt-1 text-xs font-bold text-[#d02020]">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6">
                        <div class="mb-4 flex items-center justify-between">
                            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">② Përgjigjet (shëno të saktën)</p>
                            <div class="flex items-center gap-2 text-[10px] font-bold uppercase tracking-[0.24em]"><span class="size-3 rounded-full border-2 border-black bg-[#1040c0]"></span>E saktë</div>
                        </div>

                        <div class="grid gap-4">
                            @foreach($this->answers as $idx => $slot)
                                <div wire:key="answer-row-{{ $slot['id'] ?? 'new-' . $idx }}" class="relative border-2 border-black p-4 transition {{ $slot['is_correct'] ? 'bg-[#1040c0]/8 border-[#1040c0]' : 'bg-[#f9f9f9]' }}" style="{{ $slot['is_correct'] ? 'box-shadow:3px 3px 0 0 #1040c0' : 'box-shadow:3px 3px 0 0 #e0e0e0' }}">
                                    <div class="mb-3 flex items-center justify-between gap-3">
                                        <p class="text-[10px] font-black uppercase tracking-[0.3em] {{ $slot['is_correct'] ? 'text-[#1040c0]' : 'text-black/40' }}">Pergjigja {{ chr(65 + $idx) }} @if($slot['is_correct'])<span class="ml-1 text-[#1040c0]">✓ E sakte</span>@endif</p>
                                        <div class="flex items-center gap-2">
                                            <label class="flex cursor-pointer items-center gap-2">
                                                <input type="checkbox" wire:model.live="answers.{{ $idx }}.is_correct" class="peer sr-only"/>
                                                <div class="flex h-5 w-9 items-center border-2 border-black px-0.5 transition {{ $slot['is_correct'] ? 'bg-[#1040c0]' : 'bg-white' }}"><div class="size-3 border-2 border-black bg-white transition {{ $slot['is_correct'] ? 'translate-x-4' : '' }}"></div></div>
                                                <span class="text-[10px] font-bold uppercase tracking-[0.22em]">E sakte</span>
                                            </label>

                                            @if(count($this->answers) > $minAnswers)
                                                <button type="button" wire:click="removeAnswer({{ $idx }})" class="border-2 border-black bg-[#d02020] px-2.5 py-1 text-[10px] font-bold uppercase tracking-[0.2em] text-white" style="box-shadow:2px 2px 0 0 #121212">Hiq</button>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="grid gap-3 sm:grid-cols-[1fr_auto]">
                                        <div>
                                            <input wire:model="answers.{{ $idx }}.answer_text" type="text" placeholder="Teksti i përgjigjes…" class="w-full border-2 border-black bg-white px-4 py-2.5 text-sm font-medium outline-none focus:border-[#1040c0]"/>
                                            @error("answers.{$idx}.answer_text")
                                            <p class="mt-1 text-xs font-bold text-[#d02020]">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="flex items-end">
                                            <div>
                                                @if(!empty($slot['existingImg']))
                                                    <img src="{{ Storage::url($slot['existingImg']) }}" alt="Foto pergjigje" class="mb-1 size-10 border-2 border-black object-cover"/>
                                                @endif
                                                <input wire:model.live="answers.{{ $idx }}.image" wire:key="answer-image-{{ $slot['id'] ?? 'new-' . $idx }}" type="file" accept="image/*" class="w-full max-w-[180px] border-2 border-black bg-white px-2 py-1.5 text-[10px] font-medium"/>
                                                @error("answers.{$idx}.image")
                                                    <p class="mt-1 text-xs font-bold text-[#d02020]">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-4 flex items-center justify-between gap-3">
                            <p class="text-[10px] font-bold uppercase tracking-[0.24em] text-black/40">Minimumi: {{ $minAnswers }} pergjigje</p>
                            <button type="button" wire:click="addAnswer" class="border-2 border-black bg-[#f0c020] px-4 py-2 text-[10px] font-bold uppercase tracking-[0.22em]" style="box-shadow:3px 3px 0 0 #121212">+ Shto pergjigje</button>
                        </div>

                        @error('answers') <p class="mt-3 text-xs font-bold text-[#d02020]">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex items-center justify-between gap-4 bg-[#f0f0f0] px-6 py-5">
                        <button type="button" wire:click="closeModal" class="border-2 border-black bg-white px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] transition hover:bg-[#e0e0e0]" style="box-shadow:3px 3px 0 0 #121212">Anulo</button>
                        <button type="submit" class="border-2 border-black bg-[#1040c0] px-7 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white transition active:translate-x-[2px] active:translate-y-[2px]" style="box-shadow:4px 4px 0 0 #121212">{{ $editingId ? 'Ruaj ndryshimet' : 'Krijo pyetjen' }}</button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    @if($confirmDeleteId)
        <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60">
            <div class="w-full max-w-sm border-4 border-black bg-white p-8" style="box-shadow:8px 8px 0 0 #d02020">
                <h3 class="text-xl font-black uppercase tracking-[-0.04em]">Konfirmo fshirjen</h3>
                <p class="mt-3 text-sm font-medium text-black/70">Kjo do të fshijë pyetjen dhe të gjitha përgjigjet e saj.</p>
                <div class="mt-6 flex gap-3">
                    <button wire:click="delete" class="border-2 border-black bg-[#d02020] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white" style="box-shadow:3px 3px 0 0 #121212">Po, fshi</button>
                    <button wire:click="$set('confirmDeleteId', null)" class="border-2 border-black bg-white px-5 py-3 text-xs font-bold uppercase tracking-[0.22em]" style="box-shadow:3px 3px 0 0 #121212">Anulo</button>
                </div>
            </div>
        </div>
    @endif
</div>

