<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model {



	public  function estudiante(){

        return $this->belongsTo('Sigea\Estudiante');
    }


    public  function pregunta(){

        return $this->belongsTo('Sigea\Pregunta');
    }


}
