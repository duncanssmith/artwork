<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $guarded = [];

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
}
