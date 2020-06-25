<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regalo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regalos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'regalo_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcion', 'precio'];
}
