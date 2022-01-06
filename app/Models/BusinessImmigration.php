<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessImmigration extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'aoi' => 'array'
    ];
}
