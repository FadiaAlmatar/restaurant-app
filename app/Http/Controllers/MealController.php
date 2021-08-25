<?php

namespace App\Http\Controllers;

use App\Models\CategoryMeal;
use App\Models\Component;
use App\Models\Meal;
use App\Models\User;
use App\Notifications\MealPublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;

class MealController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }
    public function search(Request $request)
    {
        $name =  $request->name;
        $search =  $request->search;
        if ($name == null) {
            echo "<script>alert('please enter word to search');</script>";
        }
        if ($search == "name" or $search == null) {
            $meals = Meal::where('name', 'like', '%' . $name . '%')->get();
            return view('meal.index', ['meals' => $meals]);
        }
        if ($search == "price") {
            $meals = Meal::where('price', $name)->get();
            return view('meal.index', ['meals' => $meals]);
        }
        if ($search == "pricemore") {
            $meals = Meal::where('price', '>=', $name)->get();
            return view('meal.index', ['meals' => $meals]);
        }
        if ($search == "priceless") {
            $meals = Meal::where('price', '<=', $name)->get();
            return view('meal.index', ['meals' => $meals]);
        }
        if ($search == "calory") {
            $meals = Meal::where('calory', $name)->get();
            return view('meal.index', ['meals' => $meals]);
        }
    }
    public function index()
    {
        $meal = Meal::paginate(6);
        return redirect('meal.index', ['meal', $meal]);
    }
    public function create()
    {
        $categories = CategoryMeal::all();
        $components = Component::all();
        return view('meal.create', ['categories' => $categories, 'components' => $components]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'                 =>         'required|max:255|min:4',
            'image'                =>         'required|url',
            'price'                =>         'required|numeric',
            'calory'               =>         'required|numeric',
            ///'category_meal_id'     =>         'required|numeric|id',
        ]);
        $meal = new Meal();
        $meal->name = $request->name;
        $meal->image = $request->image;
        $meal->category_meal_id = $request->category_meal_id;
        $meal->price = $request->price;
        $meal->calory = $request->calory;
        $meal->slug = Str::slug($request->name, '-');
        $meal->save();
        $meal->components()->sync($request->components);
        Notification::send(User::all(), new MealPublished($meal));
        return redirect()->route('meals.show', $meal);
    }
    public function show(Meal $meal)
    {
        return view('meal.show', ['meal' => $meal]);
    }
    public function edit(Meal $meal)
    {
        $categories = CategoryMeal::all();
        $components = Component::all();
        return view('meal.edit', ['categories' => $categories, 'components' => $components]);
    }
    public function update(Request $request, Meal $meal)
    {
        $request->validate([
            'name'                     => 'required|min:4|max:255',
            'price'                    => 'required|numeric',
            'calory'                   => 'required|numeric',
            'category_meal_id'              => 'required|numeric|exists:categories,id',
            'components'               => 'array',
            'image'                    => 'required|file|image'
        ]);
        $meal->name = $request->name;
        $meal->price = $request->price;
        $meal->calory = $request->calory;
        $meal->image = $request->image;
        $image = $request->image;
        $path = $image->store('meal-images', 'public');
        $meal->image = $path;
        $meal->category_meal_id = $request->category_meal_id;
        $meal->slug = Str::slug($request->name, '-');
        $meal->save();
        $meal->components()->sync($request->components);
        return redirect()->route('meals.show', $meal);
    }
    public function destroy(Meal $meal)
    {
    }
}
