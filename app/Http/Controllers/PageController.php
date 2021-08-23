<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $Restaurant = Restaurant::orderBy('created_at', 'desc')->limit(4)->get();;
        return view('pages.home', ['restaurant' => $Restaurant]);
    }
}
