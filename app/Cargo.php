<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model {



        public function personas (){

            return $this->belongsToMany('Sigea\Persona');
        }

}
