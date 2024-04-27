<?php

namespace App\Models;

class District
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'district_name',
        'province_id'
    ];
}