<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Equipo
 */
class Equipo extends Model
{
    protected $table = 'equipo';

    protected $primaryKey = 'idequi';

	public $timestamps = false;

    protected $fillable = [
        'nombreequi'
    ];

    protected $guarded = [];


}
