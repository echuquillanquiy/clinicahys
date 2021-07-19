<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    public function __construct(){
        $this->middleware('can:Ver sedes')->only('index');
        $this->middleware('can:Crear sedes')->only('create', 'store');
        $this->middleware('can:Editar sedes')->only('edit', 'update');
        $this->middleware('can:Eliminar sedes')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.places.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.places.create');
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
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:places',
            'phone' => 'required|min:9',
            'url' => 'required|url',
            'iframe' => 'required',
            'file' => 'required',
        ]);

        $url = Storage::put('public/places', $request->file('file'));

        $place = Place::create([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'url' => $request->url,
            'iframe' => $request->iframe,
            'image' => $url,
        ]);

        return redirect()->route('places.edit', $place);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('web.places.edit', compact('place'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:places,id,' . $place->id,
            'phone' => 'required|min:9',
            'url' => 'required|url',
            'iframe' => 'required',
            'file' => 'image',
        ]);

        if ($request->file('file')){
            $url = Storage::put('public/places', $request->file('file'));
            if ($place->image){
                Storage::delete($place->image);

                $place->update([
                    'image' => $url
                ]);
            }
        }

        $place->update([
            'name' => $request->name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'url' => $request->url,
            'iframe' => $request->iframe,
        ]);

        return redirect()->route('places.edit', $place);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        $place->delete();

        return redirect()->route('places.index')->with('info', 'La sede se elimino correctamente');
    }
}
