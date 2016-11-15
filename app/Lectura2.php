<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lectura2
 */
class Lectura2 extends Model
{
    protected $table = 'lectura2';

    protected $primaryKey = 'idlec1';

	public $timestamps = false;

    protected $fillable = [
        'idot',
        '20lec2',
        '25lec2',
        '30lec2',
        '35lec2',
        '40lec2',
        '45lec2',
        '50lec2',
        '55lec2',
        '60lec2',
        '65lec2',
        '70lec2',
        '75lec2',
        '80lec2',
        '85lec2',
        '90lec2'
    ];

    protected $guarded = [];


}
