<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
 protected $table = 'convocatoria';



 protected $fillable = ['titulo','descripcion','fecha','estado','idcat'];

//protected $dates = ['deleted_at'];
}
