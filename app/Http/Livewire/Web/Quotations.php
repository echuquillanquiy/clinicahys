<?php

namespace App\Http\Livewire\Web;

use App\Models\Quotation;
use Livewire\Component;

use Livewire\WithPagination;

class Quotations extends Component
{
    use WithPagination;

    public $quotation, $search;

    public function mount(Quotation $quotation){
        $this->quotation = $quotation;
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $quotations = Quotation::latest('id')
            ->where('name', 'LIKE', '%' . $this->search . '%')
            ->paginate(10);
        return view('livewire.web.quotations', compact('quotations'));
    }
}
