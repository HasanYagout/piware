<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'name',
        'email',
        'type',
        'message',
    ];

    // Optional: Add any casts or accessors
    protected $casts = [
        'created_at' => 'datetime',
    ];
}
