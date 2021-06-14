<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->with('posts', $posts);

        /* $posts = DB::select('select * from posts where id = :id', ['id' => 7]); */
        /* dd($posts); */

        /* $id = 7; */
        /* $post = DB::table('posts') */
        /*     ->where('id', $id) */
        /*     ->get(); */
        /* $posts = DB::table('posts') */
        /*     ->select('description') */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->where('created_at', '>', now()->subDay()) */
        /*     ->orWhere('title', 'Lorine Becker') */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->whereBetween('id', [1, 5]) */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->whereNotNull('title') */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->select('title') */
        /*     ->distinct() */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->select('title') */
        /*     ->orderBy('title') */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->latest() */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->oldest() */
        /*     ->get(); */

        /* $posts = DB::table('posts') */
        /*     ->inRandomOrder() */
        /*     ->get(); */

        /* $post = DB::table('posts') */
        /*     ->orderBy('created_at', 'desc') */
        /*     ->first(); */

        /* $post = DB::table('posts')->find(12); */

        /* $count = DB::table('posts')->count(); */
        /* dd($count); */

        /* $count = DB::table('posts') */
        /*     ->where('id', 5) */
        /*     ->count(); */
        /* dd($count); */

        /* $min = DB::table('posts')->min('id'); */
        /* $max = DB::table('posts')->max('id'); */
        /* $sum = DB::table('posts')->sum('id'); */
        /* $avg = DB::table('posts')->average('id'); */
        /* dd($min, $max, $sum, $avg); */

        /* $post = DB::table('posts')->insert([ */
        /*     'title' => 'New Post', */
        /*     'description' => 'New post description', */
        /* ]); */

        /* $post = DB::table('posts') */
        /*     ->where('id', 11) */
        /*     ->update([ */
        /*         'title' => 'new post title', */
        /*         'description' => 'the new post updated body', */
        /*     ]); */

        /* $post = DB::table('posts')->delete(11); */
        /* dd($post); */
    }

    public function show(Post $post)
    {
        return view('posts.show')->with('post', $post);
    }
}
