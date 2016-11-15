<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Hojavida
 */
class Hojavida extends Model
{
    protected $table = 'hojavida';

    protected $primaryKey = 'idhv';

	public $timestamps = false;

    protected $fillable = [
        'idhta',
        'idprop',
        'rutenc'
    ];

    protected $guarded = [];


}
