<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    //
    // Use this - fields that can be mass assigned
    protected $fillable = [
            'reference',
            'title' ,
            'artist' ,
            'media' ,
            'dimensions' ,
            'date' ,
            'description' ,
            'notes' ,
    ];

    // Or use this - negated fields that can't be mass assigned - empty means all fields can be assigned
    // protected $guarded = [];

}
