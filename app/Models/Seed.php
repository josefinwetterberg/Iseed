<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seed extends Model
{
    use HasFactory;

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
        'user_id',
        'category',
        'where_to_sow',
        'when_to_sow',
        'when_to_harvest'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'seed_category');
    }

    //För att en seed ska kunna ha flera whereToSow
    public function whereToSow()
    {
        return $this->belongsToMany(WhereToSow::class);
    }

    public function seasons()
    {
        return $this->belongsToMany(Season::class, 'seed_season')->withPivot('action');
    }
}
