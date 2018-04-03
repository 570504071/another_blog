<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class PostsController extends Controller
{
    public function getIndex(Request $request)
    {
        // 调用Post模型定义的方法
        $posts = Post::with('author')->orderBy('id', 'DESC')->get();
        return view('index')->with('posts', $posts);
    }

    public function showAddForm(Request $request)
    {
        return view('add');
    }

    public function add(Request $request)
    {
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'author_id' => Auth::user()->id,
        ]);

        return redirect()->to('index');
    }
}
