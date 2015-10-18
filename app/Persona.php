<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;


class Persona extends Model {

    //protected $fillable = [  ];




    public function cargos(){

        return $this->belongsToMany('Sigea\Cargo');

    }
    public function materias(){

        return $this->belongsToMany('Sigea\Materia');

    }

    public function user(){

        return $this->belongsTo('Sigea\User','user_id');

    }






}
