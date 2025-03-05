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

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    //För att en seed ska kunna ha flera whereToSow
    public function whereToSow()
    {
        return $this->belongsToMany(WhereToSow::class);
    }

    public function seasons()
    {
        return $this->belongsToMany(Season::class)->withPivot('action');
    }
}
