<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use App\Models\Post;


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
            
            // image resize for uniform display on webpage
            $image = Image::make(public_path("storage/{$imagePath}"))->resize(1200,1200);
            $image->save();
            
            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'image' => $imagePath



            ]);

            

            return redirect('/profile/'.auth()->user()->id);

        }

        public function show(\App\Models\Post $post)
        {

            return view('posts.show',compact('post'));
            
        }


        public function destroy($post)
    {
        $posts = Post::find($post);
        $posts->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
}
