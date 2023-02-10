<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Store extends Model {
    use HasFactory;

    /**
     * Seta qual tabela será usada.
     * @var protected $table
    */
    protected $table = 'stores';

    /**
     * Seta qual chave primária será usada.
     * @var protected $primaryKey
    */
    protected $primaryKey = 'id';

    /**
     * Seta qual as colunas serão usadas.
     * @var protected $fillable
    */
    protected $fillable = [
        'name',
        'email'
    ];

    public function products(){
        return $this->belongsToMany('App\Models\Product', 'stores', 'id', 'id');
    }
}
