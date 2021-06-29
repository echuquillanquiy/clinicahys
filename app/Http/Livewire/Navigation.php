<?php

namespace App\Http\Livewire;

use App\Models\Place;
use App\Models\Service;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        $services = Service::all();
        $places = Place::all();

        return view('livewire.navigation', compact('services', 'places'));
    }
}
