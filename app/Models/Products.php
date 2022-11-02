<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $teble = 'products';
    protected $fillable = ['name','price','detail','id_typeproducts','image'];
}