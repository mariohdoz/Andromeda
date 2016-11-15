<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tecnico
 */
class Tecnico extends Model
{
    protected $table = 'tecnico';

    protected $primaryKey = 'ruttec';

	public $timestamps = false;

    protected $fillable = [
        'nombretec',
        'celulartec',
        'correotec'
    ];

    protected $guarded = [];


}
