<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Service;
use App\Models\Work;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        $places = Place::all();
        $works = Work::where('status', '2')
                    ->latest('id')
                    ->take(12)
                    ->get();

        return view('welcome', compact('services', 'places', 'works'));
    }
}
