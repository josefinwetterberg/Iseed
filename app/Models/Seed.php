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
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'seed_category');
    }
}
