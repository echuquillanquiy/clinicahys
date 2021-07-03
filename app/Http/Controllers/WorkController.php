<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        return view('works.index');
    }

    public function show(Work $work)
    {
        $this->authorize('published', $work);

        $similares = Work::where('category_id', $work->category_id)
            ->where('id', '!=', $work->id)
            ->where('status', 2)
            ->latest('id')
            ->take(4)
            ->get();

        return view('works.show', compact('work', 'similares'));
    }

    public function applied(Work $work)
    {
        $work->applicants()->attach(auth()->user()->id);

        return back();
    }
}
