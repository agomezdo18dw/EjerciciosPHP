<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Category;
Use \Carbon\Carbon;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $post = new Post;
        $btn = "Crear";
        return view('posts.create')->with(['categories' => $categories, 'post' => $post, 'btnText' => $btn]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $time = Carbon::now()->setTimezone('Europe/Madrid');

        $Post = new Post;
        $Post->title = $request -> input('title');
        $Post->excerpt = $request -> input('excerpt');
        $Post->body = $request -> input('body');
        $Post->image = $request -> input('img');
        $Post->published_at = $time->toDateTimeString();
        $Post->category_id = $request -> get('category');
        $Post->user_id = Auth::user()->id;
        $Post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $this->authorize('view', $post);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        $btn = "Editar";
        return view('posts.update')->with(['categories' => $categories, 'post' => $post, 'btnText' => $btn]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $time = Carbon::now()->setTimezone('Europe/Madrid');

        $Post = Post::find($id);
        $Post->title = $request -> input('title');
        $Post->excerpt = $request -> input('excerpt');
        $Post->body = $request -> input('body');
        $Post->image = $request -> input('img');
        $Post->published_at = $time->toDateTimeString();
        $Post->category_id = $request -> get('category');
        $Post->user_id = Auth::user()->id;
        $Post->save();

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect(route('posts.index'));
    }
}
