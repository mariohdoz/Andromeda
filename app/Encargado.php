<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Encargado
 */
class Encargado extends Model
{
    protected $table = 'encargado';

    protected $primaryKey = 'rutenc';

	public $timestamps = false;

    protected $fillable = [
        'nombreenc',
        'celularenc',
        'correoenc'
    ];

    protected $guarded = [];


}
