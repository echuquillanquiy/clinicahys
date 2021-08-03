<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('can:Ver usuarios')->only('index');
        $this->middleware('can:Crear usuarios')->only('create', 'store');
        $this->middleware('can:Editar usuarios')->only('edit', 'update');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.edit', $user);
    }

    public function curriculum()
    {
        $user = auth()->user();
        return view('profiles.curriculum', compact('user'));
    }

    public function savecurriculum(Request $request, User $user){

        $request->validate([
            'address' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'name_contact' => 'required|min:15',
            'phone_contact' => 'required',
            'file' => 'required|mimes:pdf|max:10000'
        ]);

        $url = Storage::put('public/resources', $request->file('file'));

        Profile::create([
            'address' => $request->address,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'name_contact' => $request->name_contact,
            'phone_contact' => $request->phone_contact,
            'user_id' => auth()->user()->id,
            'cv' => $url
        ]);

        return redirect()->route('profiles.curriculum');
    }

    public function editcv(Profile $profile){
        return view('profiles.editcv', compact('profile'));
    }

    public function updatecv(Profile $profile, Request $request){
        $request->validate([
            'address' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'name_contact' => 'required',
            'phone_contact' => 'required'
        ]);

        $profile->update([
            'address' => $request->address,
            'birthday' => $request->birthday,
            'phone' => $request->phone,
            'name_contact' => $request->name_contact,
            'phone_contact' => $request->phone_contact,
        ]);

        return redirect()->route('profiles.curriculum', $profile);
    }
}
