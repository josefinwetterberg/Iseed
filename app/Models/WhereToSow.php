<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhereToSow extends Model
{
    //Vad ska vara här?
    protected $fillable = [
        '??'
    ];

    public function seeds()
    {
        return $this->belongsToMany(Seed::class);
    }
}
