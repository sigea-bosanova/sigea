<?php namespace Sigea;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model {

    public function estudiantes(){

        return $this->hasMany('Sigea\Estudiante');
    }

    public function cursos(){

        return $this->hasMany('Sigea\Curso');
    }

    public function materias(){

        return $this->hasMany('Sigea\Materia');
    }
    public static function formatear(){
        $gradosAux = Grado::all();
        $respuesta = array();

        foreach ($gradosAux as $grado){
            $respuesta [$grado->id] = $grado->nombre;
        }
        return $respuesta;
    }

}
