<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;


class Acudiente extends Model {



    public function estudiantes(){

        return $this->belongsToMany('Sigea\Estudiante');

    }




}
