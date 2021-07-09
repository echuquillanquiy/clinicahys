<?php

namespace App\Http\Livewire\Entrevistador;

use App\Models\Requirement;
use App\Models\Work;
use Livewire\Component;

class WorksRequirement extends Component
{
    public $work, $requirement, $name;

    protected $rules = [
      'requirement.name' => 'required'
    ];

    public function mount(Work $work){
        $this->work = $work;
        $this->requirement = new Requirement();
    }

    public function render()
    {
        return view('livewire.entrevistador.works-requirement')->layout('layouts.entrevistador');
    }

    public function store(){
        $this->validate([
            'name' => 'required'
        ]);
        $this->work->requirements()->create([
            'name' => $this->name
        ]);

        $this->reset('name');
        $this->work = Work::find($this->work->id);
    }

    public function edit(Requirement $requirement){
        $this->requirement = $requirement;
    }

    public function update(){
        $this->validate();
        $this->requirement->save();

        $this->requirement = new Requirement();

        $this->work = Work::find($this->work->id);
    }

    public function destroy(Requirement $requirement){
        $requirement->delete();

        $this->work = Work::find($this->work->id);
    }
}
