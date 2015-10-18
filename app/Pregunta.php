<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model {



    public  function respuestas(){

        return $this->hasMany('Sigea\Respuesta');
    }


}
