<?php

namespace App\Http\Livewire\Web;

use App\Models\Service;
use Livewire\Component;

use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $services = Service::where('name', 'LIKE', '%' . $this->search . '%')
            ->paginate(8);

        return view('livewire.web.services', compact('services'));
    }
}
