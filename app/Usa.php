<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usa
 */
class Usa extends Model
{
    protected $table = 'usa';

    protected $primaryKey = 'idusa';

	public $timestamps = false;

    protected $fillable = [
        'idcert',
        'idequi'
    ];

    protected $guarded = [];


}
