<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index(){

		$search = request('search');

		return view('blog', [
			'posts' => Post::with('category', 'user')
				->where('title', 'like', '%'.$search.'%')
				->orWhere('excerpt', 'like', '%'.$search.'%')
				->orWhere('content', 'like', '%'.$search.'%')
				->paginate(5),
			'title' => 'Blog'
		]);
    }

    public function single(Post $post){

		$category = $post->category;

		$post->increment('views', 1);
		
		return view('blog-details', [
			'data' => $post,
			'category' => $category
		]);
    }

	public function model_test(){
		dd( Post::all() );
	}

	public function categoryWisePosts(Category $category){

		return view('category', [
			'title' => $category->name,
			'posts' => $category->posts()->paginate(3)
		]);
	}


	public function userBasedPost(User $user){

		return view('user-post', [
			'title' => $user->name,
			'user' => $user,
			'posts' => $user->posts()->paginate(2)
		]);

	}

}

