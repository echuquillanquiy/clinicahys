<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Place;
use App\Models\Type;
use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;

class WorksIndex extends Component
{
    use WithPagination;

    public $category_id, $type_id, $place_id;

    public function render()
    {
        $categories = Category::all();
        $types = Type::all();
        $places = Place::all();

        $works = Work::where('status', '2')
                ->category( $this->category_id)
                ->type($this->type_id)
                ->place($this->place_id)
                ->latest('id')
                ->paginate(8);

        return view('livewire.work-index', compact('works', 'categories', 'types', 'places'));
    }

    public function resetFilters(){
        $this->reset(['category_id', 'type_id', 'place_id']);
    }
}
