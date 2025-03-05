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
        'organic',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
