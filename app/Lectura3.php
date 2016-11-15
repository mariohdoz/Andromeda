<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lectura3
 */
class Lectura3 extends Model
{
    protected $table = 'lectura3';

    protected $primaryKey = 'idlec1';

	public $timestamps = false;

    protected $fillable = [
        'idot',
        '20lec3',
        '25lec3',
        '30lec3',
        '35lec3',
        '40lec3',
        '45lec3',
        '50lec3',
        '55lec3',
        '60lec3',
        '65lec3',
        '70lec3',
        '75lec3',
        '80lec3',
        '85lec3',
        '90lec3'
    ];

    protected $guarded = [];


}
