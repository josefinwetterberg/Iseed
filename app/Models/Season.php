<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    //Osäker på vad som ska vara här på fillable. Ska det vara name?
    protected $fillable = [
        'name'
    ];

    public function seeds()
    {
        return $this->belongsToMany(Seed::class)->withPivot('action');
    }
}
