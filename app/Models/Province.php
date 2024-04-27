<?php

namespace App\Models;

class Province
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'province_name',
        'country_id'
    ];
}