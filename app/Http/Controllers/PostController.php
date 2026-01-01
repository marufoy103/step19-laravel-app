<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //記事一覧画面
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    //記事作成画面
    public function create()
    {
        return view('posts.create');
    }

    //記事新規投稿
    public function store(Request $request)
    {
        $post = Post::create($request->all());
        return redirect()->route('posts.index');
    }

    //記事編集画面
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    //記事更新
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    //記事削除
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
