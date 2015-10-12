<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;
use Sigea\Acudiente;

class Estudiante extends Model {


    public function acudientes(){
        return $this->belongsToMany('Acudiente');
    }


}
