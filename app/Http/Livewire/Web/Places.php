<?php

namespace App\Http\Livewire\Web;

use App\Models\Place;
use Livewire\Component;

use Livewire\WithPagination;

class Places extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        $places = Place::where('name', 'LIKE', '%' . $this->search . '%')
            ->paginate(10);

        return view('livewire.web.places', compact('places'));
    }
}
