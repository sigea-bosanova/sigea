<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;
use Sigea\Estudiante;

class Acudiente extends Model {



    public function estudiantes(){
        return $this->belongsToMany('Estudiante');
    }




}
