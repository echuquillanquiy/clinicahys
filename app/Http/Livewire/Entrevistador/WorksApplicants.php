<?php

namespace App\Http\Livewire\Entrevistador;

use App\Models\Work;
use Livewire\Component;

use Livewire\WithPagination;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorksApplicants extends Component
{
    use AuthorizesRequests;
    use WithPagination;

    public $work, $search;

    public function mount(Work $work){
        $this->work = $work;

        $this->authorize('publicated', $work);
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $applicants = $this->work->applicants()
            ->where('name', 'LIKE', '%'. $this->search . '%')
            ->paginate(5);

        return view('livewire.entrevistador.works-applicants', compact('applicants'))->layout('layouts.entrevistador', ['work' => $this->work]);
    }
}
