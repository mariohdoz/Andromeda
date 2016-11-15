<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Torquimetro
 */
class Torquimetro extends Model
{
    protected $table = 'torquimetro';

    protected $primaryKey = 'idtor';

	public $timestamps = false;

    protected $fillable = [
        'serietor',
        'partetor',
        'marcator',
        'modelotor',
        'unidadtor',
        'rangotor',
        'resoluciontor',
        'emisortor'
    ];

    protected $guarded = [];


}
