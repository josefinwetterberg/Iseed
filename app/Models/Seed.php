<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seed extends Model
{
    protected $fillable = [
        'name',
        'description',
        'annuality',
        'height_cm',
        'color',
        'image',
        'price_sek',
        'seed_count',
        'ecological',
        'user_id'
    ];
}
