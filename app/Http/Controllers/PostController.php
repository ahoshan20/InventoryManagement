<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Models\Post;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PostCreated as GlobalPostCreated;

class PostController extends Controller
{
    public function create()
    {
        return view('pusher.post');
    }
    public function pusher1():View
    {
        return view('pusher.pusher1');
    }

    public function store(Request $request)
    {
        $post=$request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        $data = [
            'title' => $post['title']
        ];
        event(new PostCreated($data));
        return redirect()->back();
    }
}
