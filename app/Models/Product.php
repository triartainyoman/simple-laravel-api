<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Yang boleh diisi
    // protected $fillable = ['name', 'description', 'price', 'image_url'];

    // Yang dilindungi, selain itu fillable
    protected $guarded = ['id'];
}
