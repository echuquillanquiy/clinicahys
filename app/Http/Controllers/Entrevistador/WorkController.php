<?php

namespace App\Http\Controllers\Entrevistador;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Place;
use App\Models\Type;
use Illuminate\Http\Request;

use App\Models\Work;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{

    public function __construct(){
        $this->middleware('can:Ver trabajos')->only('index');
        $this->middleware('can:Crear trabajos')->only('create', 'store');
        $this->middleware('can:Actualizar trabajos')->only('edit', 'update', 'requirements');
        $this->middleware('can:Eliminar trabajos')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entrevistador.works.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        $places = Place::pluck('name', 'id');
        $types = Type::pluck('name', 'id');

        return view('entrevistador.works.create', compact('categories', 'places', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:works',
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'place_id' => 'required',
            'type_id' => 'required',
            'start' => 'required',
            'end' => 'required',
            'file' => 'image'
        ]);

        $work = Work::create($request->all());

        if ($request->file('file')){
            $url = Storage::put('public/works', $request->file('file'));

            $work->image()->create([
                'url' => $url
            ]);
        }

        return redirect()->route('entrevistador.works.edit', $work);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return view('entrevistador.works.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        $this->authorize('publicated', $work);

        $categories = Category::pluck('name', 'id');
        $places = Place::pluck('name', 'id');
        $types = Type::pluck('name', 'id');

        return view('entrevistador.works.edit', compact('work', 'categories', 'places', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $this->authorize('publicated', $work);

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:works,slug,' . $work->id,
            'subtitle' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'place_id' => 'required',
            'type_id' => 'required',
            'start' => 'required',
            'end' => 'required',
            'file' => 'image'
        ]);

        $work->update($request->all());

        if ($request->file('file')){
            $url = Storage::put('public/works', $request->file('file'));
            if ($work->image){
                Storage::delete($work->image->url);

                $work->image->update([
                    'url' => $url
                ]);
            }else{
                $work->image()->create([
                   'url' => $url
                ]);
            }
        }

        return redirect()->route('entrevistador.works.edit', $work);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        //
    }

    public function requirements(Work $work){

        $this->authorize('publicated', $work);

        return view('entrevistador.works.requeriments', compact('work'));
    }

    public function status(Work $work){
        $work->status = 2;
        $work->save();


        return redirect()->route('entrevistador.works.index');
    }
}
