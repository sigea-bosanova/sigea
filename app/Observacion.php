<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Observacion extends Model {


    public function estudiante(){

        return $this->belongsTo('Sigea\Estudiante');
    }

}
