<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lectura1
 */
class Lectura1 extends Model
{
    protected $table = 'lectura1';

    protected $primaryKey = 'idlec1';

	public $timestamps = false;

    protected $fillable = [
        'idot',
        '20lec1',
        '25lec1',
        '30lec1',
        '35lec1',
        '40lec1',
        '45lec1',
        '50lec1',
        '55lec1',
        '60lec1',
        '65lec1',
        '70lec1',
        '75lec1',
        '80lec1',
        '85lec1',
        '90lec1'
    ];

    protected $guarded = [];


}
