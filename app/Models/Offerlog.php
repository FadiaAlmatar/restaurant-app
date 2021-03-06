<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offerlog extends Model
{
    use HasFactory;

    public function offer()
    {
        return $this->belongsTo(Offer::class);}

        public function users()
        {
            return $this->belongsTo(User::class);}

            public function order()
            {
                return $this->belongsTo(Order::class);}

                
            public function resturant()
            {
                return $this->belongsTo(Restaurant::class);}
}
