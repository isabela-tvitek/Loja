<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model {
    use HasFactory;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'price',
        'store_id',
        'active',
        'stock',
        'created_at'
    ];
}
