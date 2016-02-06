<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model {

    public function estudiantes(){

        return $this->hasMany('Sigea\Estudiante');
    }

    public function cursos(){

        return $this->hasMany('Sigea\Curso');
    }

}
