<?php

namespace App\classes;

use Illuminate\Support\Facades\Session;

class Datam {

    public function getCubo(){
        $data = Session::get('cubo');
        return $data;
    }

    public function setCubo($valor){
        $data = Session::put('cubo', $valor);
        return $data;
    }

    public function getOperacion(){
        $data = Session::get('test');
        return $data;
    }

    public function setOperacion($valor){
        $data = Session::put('test', $valor);
        return $data;
    }

    public function reset(){
        Session::flush();
    }

}