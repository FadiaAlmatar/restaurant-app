<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function users($var = null)
    {
        return $this->hasMany(User::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
