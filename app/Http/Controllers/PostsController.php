<?php

namespace App\Http\Controllers;


class PostsController extends Controller
{
    //construct function for authentication on postscontroller
    public function __construct()
    {
        $this->middleware('auth');
    }

    

    //method for creating a post
    public function create()
    {
        return view('posts.create');


    }

    // method for storing post on database
    public function store()
        {

            $data = request()->validate([
                'caption' => 'required', 
                'image' => ['required','image']

            ]);

            $imagePath= request('image')->store('uploads','public');
            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image' => $imagePath


            ]);

            return redirect('/profile/'.auth()->user()->id);

        }
}
