<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ot
 */
class Ot extends Model
{
    protected $table = 'ot';

    protected $primaryKey = 'idot';

	public $timestamps = false;

    protected $fillable = [
        'idhta',
        'idtor',
        'idmano',
        '20hta',
        '25hta',
        '30hta',
        '35hta',
        '40hta',
        '45hta',
        '50hta',
        '55hta',
        '60hta',
        '65hta',
        '70hta',
        '75hta',
        '80hta',
        '85hta',
        '90hta'
    ];

    protected $guarded = [];


}
