<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;

// Home Controller

Route::get('/', [HomeController::class, 'index'])->name('home');

// Post Controller

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

    // Route::get('posts', [PostController::class, 'index'])->name('admin.posts');

    // Route::get('post/create', [PostController::class, 'create'])->name('admin.post.create');

    // Route::post('post/store', [PostController::class, 'store'])->name('admin.post.store');

    // Route::get('post/edit/{post}', [PostController::class, 'edit'])->name('admin.post.edit');

    // Route::put('post/update/{post}', [PostController::class, 'update'])->name('admin.post.update');

    // Route::delete('post/delete/{post}', [PostController::class, 'destroy'])->name('admin.post.delete');

    Route::resources([
        'posts'=> PostController::class,
        'categories'=> CategoryController::class,
    ]);

    // Route::resource('/posts',PostController::class);
    // Route::resource('/categories',CategoryController::class);
});





Route::get('/blog', [BlogController::class, 'index'])->name("blog");

Route::get('/article/{post:slug}', [BlogController::class, 'single'])->name('single-post');

Route::get('/model-test', [BlogController::class, 'model_test']);

Route::get('category/{category:slug}', [BlogController::class, 'categoryWisePosts']);

Route::get('users/{user:username}', [BlogController::class, 'userBasedPost'])->name('user-post');

Route::get('search-page', function(){

    $search_value = request('search');

    $posts =
    Post::
        where('title', 'like', '%'.$search_value.'%')
        ->orWhere('excerpt', 'like', '%'.$search_value.'%')
        ->orWhere('content', 'like', '%'.$search_value.'%')
        ->get();

    return view('test-search', [
        'posts' => $posts
    ]);
});

// Registration and login routes

Route::get('register', [LoginController::class, 'register'])->name('register')->middleware('guest');
Route::post('register', [LoginController::class, 'registerPost'])->name("registerProcess");

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'loginPost'])->name('loginProcess');

Route::get('dashboard', [LoginController::class, 'dashboard'])->name("dashboard")->middleware('auth');
Route::post('logout', [LoginController::class, 'signout'])->name('logout')->middleware('auth');



Route::get('/test-upload', function(){
    return view('upload-image');
});

Route::post('test-upload', function(Request $request){

    $image = $request->file('thumbnail');

    $image_name = $image->hashname();

    $image->storeAs('/public/images', $image_name);

    return 'image upload hoise';
})->name('upload-image');
