<?php

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

new #[\Livewire\Attributes\Layout('layouts::admin', ['title' => 'Kategoritë'])] class extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    public string $name = '';
    public ?int $editingId = null;
    public string $search = '';
    public bool $showForm = false;
    public ?int $confirmDeleteId = null;

    public function rules(): array
    {
        return (new CategoryRequest())->rules();
    }

    public function openCreate(): void
    {
        $this->reset('name', 'editingId');
        $this->showForm = true;
    }

    public function openEdit(Category $category): void
    {
        $this->editingId = $category->id;
        $this->name = $category->name;
        $this->showForm = true;
    }

    public function save(): void
    {
        $data = $this->validate();

        if ($this->editingId) {
            Category::findOrFail($this->editingId)->update($data);
        } else {
            Category::create($data);
        }

        $this->reset('name', 'editingId', 'showForm');
    }

    public function confirmDelete(int $id): void
    {
        $this->confirmDeleteId = $id;
    }

    public function delete(): void
    {
        if ($this->confirmDeleteId) {
            Category::findOrFail($this->confirmDeleteId)->delete();
        }

        $this->confirmDeleteId = null;
    }

    public function render()
    {
        return $this->view([
            'categories' => Category::query()
                ->when($this->search, fn ($q) => $q->where('name', 'like', "%{$this->search}%"))
                ->withCount('questions')
                ->orderBy('name')
                ->paginate(12),
        ]);
    }
};
?>

<div>
    <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <p class="text-[10px] font-bold uppercase tracking-[0.35em] text-black/40">Menaxhim</p>
            <h2 class="text-3xl font-black uppercase tracking-[-0.06em]">Kategoritë</h2>
        </div>
        <button wire:click="openCreate" class="inline-flex items-center gap-2 border-2 border-black bg-[#d02020] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white transition active:translate-x-[2px] active:translate-y-[2px]" style="box-shadow:4px 4px 0 0 #121212">
            + Shto kategori
        </button>
    </div>

    <div class="mb-6">
        <input wire:model.live.debounce.300ms="search" type="search" placeholder="Kërko kategori…" class="w-full border-2 border-black bg-white px-4 py-3 text-sm font-medium placeholder-black/30 outline-none focus:border-[#1040c0]" style="box-shadow:3px 3px 0 0 #121212" />
    </div>

    @if($showForm)
    <div class="mb-8 border-4 border-black bg-[#f0c020] p-6" style="box-shadow:6px 6px 0 0 #121212">
        <h3 class="mb-4 text-lg font-black uppercase tracking-[-0.04em]">{{ $editingId ? 'Ndrysho kategori' : 'Kategori e re' }}</h3>

        <form wire:submit="save" class="flex flex-col gap-4 sm:flex-row">
            <div class="flex-1">
                <input wire:model="name" type="text" placeholder="Emri i kategorisë…" class="w-full border-2 border-black bg-white px-4 py-3 text-sm font-medium placeholder-black/40 outline-none focus:border-[#1040c0]" style="box-shadow:3px 3px 0 0 #121212" />
                @error('name')
                    <p class="mt-1 text-xs font-bold text-[#d02020]">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-3">
                <button type="submit" class="border-2 border-black bg-[#121212] px-6 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white transition active:translate-x-[2px] active:translate-y-[2px]" style="box-shadow:3px 3px 0 0 #d02020">
                    {{ $editingId ? 'Ruaj' : 'Krijo' }}
                </button>
                <button type="button" wire:click="$set('showForm', false)" class="border-2 border-black bg-white px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] transition hover:bg-[#f0f0f0]" style="box-shadow:3px 3px 0 0 #121212">
                    Anulo
                </button>
            </div>
        </form>
    </div>
    @endif

    <div class="overflow-x-auto border-4 border-black" style="box-shadow:6px 6px 0 0 #121212">
        <table class="w-full min-w-[680px] border-collapse bg-white text-sm">
            <thead class="border-b-4 border-black bg-[#121212] text-white">
                <tr>
                    <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">#</th>
                    <th class="px-5 py-4 text-left text-[10px] font-bold uppercase tracking-[0.3em]">Emri</th>
                    <th class="px-5 py-4 text-center text-[10px] font-bold uppercase tracking-[0.3em]">Pyetje</th>
                    <th class="px-5 py-4 text-right text-[10px] font-bold uppercase tracking-[0.3em]">Veprime</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $cat)
                <tr class="border-b-2 border-black/10 transition hover:bg-[#f0f0f0]">
                    <td class="px-5 py-4 font-black text-black/30">{{ $cat->id }}</td>
                    <td class="px-5 py-4 font-bold">{{ $cat->name }}</td>
                    <td class="px-5 py-4 text-center">
                        <span class="inline-flex size-8 items-center justify-center rounded-full border-2 border-black bg-[#f0c020] text-xs font-black">{{ $cat->questions_count }}</span>
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <button wire:click="openEdit({{ $cat->id }})" class="border-2 border-black bg-[#1040c0] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white transition hover:opacity-90" style="box-shadow:2px 2px 0 0 #121212">
                                Ndrysho
                            </button>
                            <button wire:click="confirmDelete({{ $cat->id }})" class="border-2 border-black bg-[#d02020] px-3 py-1.5 text-[10px] font-bold uppercase tracking-[0.2em] text-white transition hover:opacity-90" style="box-shadow:2px 2px 0 0 #121212">
                                Fshi
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-5 py-10 text-center text-xs font-bold uppercase tracking-[0.24em] text-black/40">
                        Nuk ka kategori. Shto të parën!
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">{{ $categories->links() }}</div>

    @if($confirmDeleteId)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 px-4">
        <div class="w-full max-w-sm border-4 border-black bg-white p-8" style="box-shadow:8px 8px 0 0 #d02020">
            <h3 class="text-xl font-black uppercase tracking-[-0.04em]">Konfirmo fshirjen</h3>
            <p class="mt-3 text-sm font-medium text-black/70">Kjo veprim nuk mund të kthehet mbrapsht.</p>
            <div class="mt-6 flex gap-3">
                <button wire:click="delete" class="border-2 border-black bg-[#d02020] px-5 py-3 text-xs font-bold uppercase tracking-[0.22em] text-white" style="box-shadow:3px 3px 0 0 #121212">
                    Po, fshi
                </button>
                <button wire:click="$set('confirmDeleteId', null)" class="border-2 border-black bg-white px-5 py-3 text-xs font-bold uppercase tracking-[0.22em]" style="box-shadow:3px 3px 0 0 #121212">
                    Anulo
                </button>
            </div>
        </div>
    </div>
    @endif
</div>

