<?php

namespace andromeda;

use Illuminate\Database\Eloquent\Model;

class Herramienta extends Model
{
  protected $table = 'herramienta';

  protected $primaryKey = 'idhta';

  public $timestamps = false;

  protected $fillable = [
    'id',
    'idtipo',
    'codigohta',
    'seriehta',
    'estadohta',
    'descripcionhta',
    'fechaadquisicionhta',
    'lugartrabajohta',
    'frecuenciamantencionhta',
    'tipotrabajohta',
  ];

  public function tipoherramienta (){
    return $this->belongsTo('Tipoherramienta');
  }

  public function user (){
    return $this->belongsTo('User');
  }

  public function certificado () {
    return $this->hasMany('Certificado');
  }

  public function hojadevida() {
    return $this->hasMany('hojadevida');
  }

  protected $guarded = [];


}
