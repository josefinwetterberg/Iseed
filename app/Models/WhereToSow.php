<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WhereToSow extends Model
{
    use HasFactory;
    //Vad ska vara här?
    // protected $fillable = [
    //     '??'
    // ];

    public function seeds()
    {
        return $this->belongsToMany(Seed::class);
    }
}
