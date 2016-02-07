<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model {



    public function estudiantes(){

          return $this->belongsToMany('Sigea\Estudiante');
    }

    public function profesores(){

        return $this->belongsToMany('Sigea\Persona');
    }

    public function grado(){

        return $this->belongsTo('Sigea\Grado');
    }


}
