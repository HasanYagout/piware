<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'description', 'logo', 'website', 'sort_order', 'is_featured'
    ];
}
