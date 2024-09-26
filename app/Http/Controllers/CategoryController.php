<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view("components.showcategory", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("components.addcategory");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = Category::create([
           "project_name"=>$request->project_name,
        "image"=>$request->image->store("image","public"),
        "category_name"=>$request->category_name,
        "user_id"=>Auth::user()->id,
        ]);
        return redirect()->route("category.create");
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view("components.editcategory", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $data=[
            "project_name"=> $request->project_name,
            "category_naem"=> $request->category_name,
           'user_id'=>Auth::user()->id
        ];
        if($request->image){
            $data["image"]= $request->image->store("image","public");
        }
        Category::find( $category->id )->update($data);
        return redirect()->route("category.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        $category->delete();
        return redirect()->route("category.index");
    }
}
