<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;


class Estudiante extends Model {




    public function acudientes(){

        return $this->belongsToMany('Sigea\Acudiente');
    }


    public function materias(){

        return $this->belongsToMany('Sigea\Materia');
    }

    public function observaciones(){

        return $this->hasMany('Sigea\Observacion');
    }

    public function respuestas(){

        return $this->hasMany('Sigea\Respuesta');

    }



}
