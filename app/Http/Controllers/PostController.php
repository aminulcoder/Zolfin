<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $keyword = request('search');
        $title = "All Posts";

        $posts = Post::where('title', 'like', '%'.$keyword.'%')
            ->orWhere('excerpt', 'like', '%'.$keyword.'%')
            ->orWhere('content', 'like', '%'.$keyword.'%')
            ->orderBy('id', 'desc')->paginate(5);


        return view('admin.posts.posts', [
            'posts' => $posts,
            'keyword' => $keyword,
            'title'  => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();


        return view('admin.posts.create-post',[
            'categories' => $categories,
            'title' => 'Create new post'
        ]);
    }

    public function store(Request $request){

        $post_info = $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'content' => 'required',
            'thumbnail' => 'required|image|mimes:png,jpg'
        ]);



        $post = new Post;

        $post->title = $request->title;
        $post->slug = implode('-', explode(' ', $request->title ) ) . '-' . time();
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;

        $image_name = $request->file('thumbnail')->getClientOriginalName();
        $request->file('thumbnail')->storeAs('storage/images', $image_name);

        $post->thumbnail = $image_name;
        $post->user_id = auth()->user()->id;
        $post->views = 0;
        $post->category_id = $request->category_id;

        $post->save();


        return redirect()->route('posts.index')->with('message', 'Post published!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        $categories = Category::all();

        return view('admin.posts.edit-post',[
            'post' => $post,
            'categories' => $categories,
            'cat' => $post->category
        ]);
    }


    public function update(Request $request, Post $post)
    {
        $post->update( $request->all() );

        return back()->with('message', 'post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('message', 'Post removed successfully!');
    }
}
