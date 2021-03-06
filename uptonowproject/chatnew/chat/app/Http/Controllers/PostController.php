<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function create()
    {
        return view('posts');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120'
        ]);

        $id = $request['id'];


        $Description = $request['description'];
        $image = $request->file('image')->store('images', 'public');

        $post = new Post();

        $post->id = $id;

        $post->description = $Description;
        $post->image = $image;

        $post->save();

        $data = Post::all();

        $details = DB::select(DB::raw("SELECT * FROM posts WHERE (description = '$Description')"));

        return view('viewpost', compact('details'));


        $details = DB::select(DB::raw("SELECT * FROM posts"));

        return view('postview', compact('details'));
    }

    public function show()
    {
        $de = DB::table('posts')->select('description', 'image')->get();

        return view('showallpost')->with('de', $de);
    }
}
