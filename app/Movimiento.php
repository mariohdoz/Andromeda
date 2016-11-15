<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Movimiento
 */
class Movimiento extends Model
{
    protected $table = 'movimiento';

    protected $primaryKey = 'idmov';

	public $timestamps = false;

    protected $fillable = [
        'idhta',
        'fechamov',
        'movimientomov',
        'razonmov',
        'documento'
    ];

    protected $guarded = [];


}
