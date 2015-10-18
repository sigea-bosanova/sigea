<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;


class Estudiante extends Model {




    public function acudientes(){

        return $this->belongsToMany('Sigea\Acudiente');
    }


    public function materias(){

        return $this->belongsToMany('Sigea\Materia');
    }


}
