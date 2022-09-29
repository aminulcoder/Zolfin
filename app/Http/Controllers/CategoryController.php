<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyword = request('search');
        $title = "All categories ";

        $categories = Category::where('name', 'like', '%'.$keyword.'%')
            ->orWhere('name', 'like', '%'.$keyword.'%')
            ->orderBy('id', 'desc')->paginate(5);

        return view('admin.categories.index',compact('keyword','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.categories.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->slug = implode('-', explode(' ', $request->name ) ) . '-' . time();

        if($category->save()){
            return back()->with('message','Category name Seved');
        }

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
    public function edit($id)
    {
        $keyword = request('search');
        $title = "Edit Category ";
        $current_category = Category::firstWhere('id',$id);

        $categories = Category::where('name', 'like', '%'.$keyword.'%')
            ->orWhere('name', 'like', '%'.$keyword.'%')
            ->orderBy('id', 'desc')->paginate(5);

       return view('admin.categories.edit',compact('keyword','categories','title','current_category'));
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
        $category = Category::firstWhere('id',$id);
        $category->name = $request->name;
        $category->slug =strtolower(implode('-', explode(' ', $request->name ) ) . '-' . time());

        if($category->save()){
            return back()->with('message','Category Update Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::firstWhere('id',$id);
        $category->delete();
        return redirect()->route('categories.index')->with('message','Category removed successfully');
    }
}
