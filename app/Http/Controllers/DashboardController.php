<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use DB;
use Illuminate\Support\Facades\App;

class DashboardController extends Controller
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
    public function index()
    {
//        $posts = Post::where('user_id', auth()->user()->user_id)
//            ->orderBy('created_at', 'desc')
//            ->get();

        $user = User::find(auth()->user()->user_id);
        $posts = $user->posts;


        return view('dashboard', array(
            'posts' => $posts
        ));
    }
}
