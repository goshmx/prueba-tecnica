<?php

class CuboController extends Controller {


    public function inicia()
    {
        //Inicio cubo
        return Response::json(array('status' => true, 'msg' => 'CA'));
    }

    public function query(){
        //Consulta QUERY
        return Response::json(array('status' => true, 'msg' => 'CA'));
    }

    public function update(){
        //Consulta UPDATE
        return Response::json(array('status' => true, 'msg' => 'CA'));
    }

}
