<?php

namespace App\Http\Livewire;

use App\Models\Work;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Work::where('title', 'LIKE', '%' . $this->search . '%')
            ->where('status', 2)
            ->take(10)
            ->get();
    }
}
