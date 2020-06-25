<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'productos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'producto_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_prenda', 'estilo', 'color', 'talla', 'descripcion'];
}
