<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Propietario
 */
class Propietario extends Model
{
    protected $table = 'propietario';

    protected $primaryKey = 'idprop';

	public $timestamps = false;

    protected $fillable = [
        'nombreprop',
        'rutprop',
        'nombrepersprop',
        'celularprop'
    ];

    protected $guarded = [];


}
