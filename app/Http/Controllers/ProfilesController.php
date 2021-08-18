<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $id)
    {
        
        // $id = User::findOrFail($id);
        

        // return view('home',[
        //     'id' => $id 
            
        // ]);

        return view('profiles.index', compact('id'));



    }




    public function edit(User $id)
    {
        $this->authorize('update',$id->profile); 
        return view('profiles.edit', compact('id'));

    }

    public function update(User $id)
    {

     $data = request()->validate([
        'title' => 'required',
        'description' => 'required',
        'url' => 'url',
        'image' => ''
     ]);

    auth()->user()->profile->update($data);

     return redirect("/profile/{$id->id}");

    }

}
