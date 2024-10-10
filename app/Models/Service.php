<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'icon_class',
        'title',
        'short_description',
        'description'
    ];

}
