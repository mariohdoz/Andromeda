<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Certificado
 */
class Certificado extends Model
{
    protected $table = 'certificado';

    protected $primaryKey = 'idcert';

	public $timestamps = false;

    protected $fillable = [
        'idhta',
        'ruttec',
        'numtorquimetrocert',
        'serietorquimetrometro',
        'numpartecert',
        'numcert',
        'validescert',
        'proxmantencioncert',
        'fechaemisioncert'
    ];

    protected $guarded = [];


}
