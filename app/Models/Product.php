<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable  = [
        'code',
        'amount',
        'name',
        'value'
    ];

    protected $guarded = [];

    protected $casts = [
            'code' => 'integer',
            'amount' => 'integer',
            'name' => 'string',
            'value' => 'integer'
    ];
}
