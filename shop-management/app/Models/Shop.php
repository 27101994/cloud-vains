<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = ['shop_name', 'contact_number', 'address', 'images', 'status'];

    protected $casts = [
        'images' => 'array',
    ];
}