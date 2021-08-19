<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\CategoryMeal;
use App\Models\Restaurant;
use Illuminate\Support\Str;
// use TCG\Voyager\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\CategoryPublished;
use Illuminate\Support\Facades\Notification;

class CategoryMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        $categories = CategoryMeal::all();
        return view('category.index', ['categories' => $categories]);
    }
    public function search(Request $request)
    {
        $name =  $request->name;
        $search =  $request->search;
        if ($name == null) {
            echo "<script>alert('please enter word to search');</script>";
        }
        if ($search == "type" or $search == null) {
            $categories = CategoryMeal::where('type', 'like', '%' . $name . '%')->get();
            return view('category.index', ['categories' => $categories]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('category.create', ['restaurants' => $restaurants]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type'                     => 'required|min:4|max:255',
            'restaurant_id'            => 'required|numeric|exists:restaurants,id',
            'image'                    => 'required|file|image'
        ]);
        $category = new CategoryMeal();
        $category->type = $request->type;
        $category->restaurant_id = $request->restaurant_id;
        $category->image = $request->image;
        $image = $request->image;
        $path = $image->store('category-images', 'public');
        $category->image = $path;
        $category->slug = Str::slug($request->type, '-');
        /*  Notification::send(User::all(), new CategoryPublished($category)); */

        $category->save();
        return redirect()->route('categories.show', $category);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryMeal $category)
    {
        return view('category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryMeal $category)
    {
        $restaurants = Restaurant::all();
        return view('category.edit', ['category' => $category, 'restaurants' => $restaurants]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryMeal $category)
    {
        $request->validate([
            'type'                     => 'required|min:4|max:255',
            'restaurant_id'            => 'required|numeric|exists:restaurants,id',
            'image'                    => 'required|file|image'
        ]);

        $category->type = $request->type;
        $category->restaurant_id = $request->restaurant_id;
        $category->image = $request->image;
        $image = $request->image;
        $path = $image->store('category-images', 'public');
        $category->image = $path;
        $category->slug = Str::slug($request->type, '-');
        $category->save();
        return redirect()->route('categories.show', $category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryMeal $category)
    {
        //
    }
}
