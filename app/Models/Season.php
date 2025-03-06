<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Season extends Model
{
    use HasFactory;

    //Osäker på vad som ska vara här på fillable. Ska det vara name?
    protected $fillable = [
        'name'
    ];

    public function seeds()
    {
        return $this->belongsToMany(Seed::class, 'seed_season')->withPivot('action');
    }
}
