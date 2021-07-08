<?php

namespace App\Http\Livewire\Entrevistador;

use App\Models\Work;
use Livewire\Component;

use Livewire\WithPagination;

class WorksIndex extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $works = Work::where('user_id', auth()->user()->id)
            ->where('title', 'LIKE', '%' . $this->search . '%')
            ->latest('id')
            ->paginate(10);

        return view('livewire.entrevistador.works-index', compact('works'));
    }

    public function limpiar_page(){
        $this->reset('page');
    }
}
