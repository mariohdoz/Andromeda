<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Manometro
 */
class Manometro extends Model
{
    protected $table = 'manometro';

    protected $primaryKey = 'idmano';

	public $timestamps = false;

    protected $fillable = [
        'seriemano',
        'partemano',
        'marcamano',
        'modelomano',
        'unidadmano',
        'rangomano',
        'resolucionmano',
        'emisormano'
    ];

    protected $guarded = [];


}
