<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts = Post::orderBy('created_at', 'desc')->get();

//        $posts = Post::orderBy('created_at', 'desc')
//            ->take(1)
//            ->get()
//        ;

//        $posts = Post::all();

//        $post = Post::where('title', 'zoek hier naar titel');

        $posts = Post::orderBy('created_at', 'desc')->paginate(10);

        return view('posts.index', array(
            'posts' => $posts
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Create post
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->user_id;
        $post->save();

        return redirect('/posts')->with('success', 'Nieuwe post aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id)
    {
        $post = Post::find($post_id);

        return view('posts.show', array(
            'post' => $post
        ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post_id)
    {
        $post = Post::find($post_id);

        return view('posts.edit', array(
            'post' => $post
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // Update existing post
        $post = Post::find($post_id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($post->save()){
            return redirect('/posts')->with('success', 'Post succesvol bewerkt');
        } else {
            return redirect('/posts')->with('error', 'Er ging iets fout');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        if($post->delete()){
            return redirect('/posts')->with('success', 'Post succesvol verwijderd');
        } else {
            return redirect('/posts')->with('error', 'Er ging iets fout');
        }

    }
}
