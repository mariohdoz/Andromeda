<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipoherramientum
 */
class tipoherramienta extends Model
{
    protected $table = 'tipoherramienta';

    protected $primaryKey = 'idtipo';

    public $timestamps = false;

    protected $fillable = [
        'marcatipo',
        'modelotipo',
        'tipotipo',
        'ottipo',
    ];

    protected $guarded = [];

}
