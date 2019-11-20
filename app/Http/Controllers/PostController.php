<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title'=> ['required', 'min:2'],
            'fullname'=> ['required', 'min:2'],
            'body'=> ['required', 'min:2'],
        ]);
        $post =  new Post;
        $post->title = $request->get('title');
        $post->fullname = $request->get('fullname');
        $post->body = $request->get('body');
        $post->save();
        return redirect('posts');
    }
    public function index()
    {
        $posts = Post::select('id', 'title','fullname')->get();
        $user = User::all();
        return view('index', compact('posts','user'));
    }
    public function show($id)
    {
        $post = Post::find($id);
        $user = User::all();
        return view('show', compact('post','user'));
    }
}
