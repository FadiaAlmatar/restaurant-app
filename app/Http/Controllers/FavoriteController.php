<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function addFavoriteCourse(Meal $meal)
    {
        if (auth()->check()) {

            //This condition does not apply
            if (in_array(auth()->user()->favorites, $meal->favorites))
                auth()->user()->favorites()->create([
                    'course_id' => $meal->id
                ]);
            /*      toast('The course was successfully added to your list of favorite courses', 'success');
                return back();
            } else {
                toast('There are already courses in your favorites', 'error');
            }
        }
        toast('To add to your favorites list, you must first login', 'error'); */
            return back();
        }
    }
}
