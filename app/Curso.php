<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model {


	public function estudiantes(){

        return $this->hasMany('Sigea\Estudiante');
    }

}
