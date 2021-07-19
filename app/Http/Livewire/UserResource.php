<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use App\Models\User;
use Livewire\Component;

class UserResource extends Component
{
    public function render()
    {
        return view('livewire.user-resource');
    }

}
