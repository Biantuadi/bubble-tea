<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'imgUrl',
        'price',
    ];
}