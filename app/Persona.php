<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;
use Sigea\User;


class Persona extends Model {

    //protected $fillable = [  ];




    public function cargos(){

        return $this->belongsToMany('Sigea\Cargo');

    }
    public function materias(){

        return $this->belongsToMany('Sigea\Materia');

    }

    public function user(){

        return $this->belongsTo('Sigea\User');

    }

    public static function obtenerIds($users){
        $ids =  array();
        foreach ($users as $user){
            array_push($ids,$user->id);
        }
        return $ids;
    }
    public static function obtenerModelos( $ids){
       $resultado = array();


            for($i=0;$i< count($ids); $i++){
              array_push($resultado,Persona::find($ids[$i]));
            }

        return $resultado;

    }

    public static function buscarIds($opcion){
        $users = User::where('perfil', $opcion)->select('id')->get();

        return $users;
    }






}
