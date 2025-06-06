<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // add this
    // protected $table = 'product';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'product_name',
        'price',
        'quantity',
        'warranty',
        'description'

    ];

    

}
