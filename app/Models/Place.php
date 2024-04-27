<?php

namespace App\Models;

class Place
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'place_name',
        'description',
        'image',
        'rating',
        'district_id'
    ];
}