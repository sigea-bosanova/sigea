<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;
use Sigea\Acudiente;

class Estudiante extends Model {


    public function padre(){
        return $this->belongsToMany('Acudiente');
    }


}
