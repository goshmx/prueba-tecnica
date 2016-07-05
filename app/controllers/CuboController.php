<?php

class CuboController extends Controller {

    private $cubo;
    private $data;

    function __construct()
    {
        $this->data = new \App\classes\Datam();
    }

    public function inicia(){
        $reglas = array(
            'n' => 'required|integer|min:1|max:100',
            'm' => 'required|integer|min:1|max:1000',
            't' => 'required|integer|min:1|max:50'
        );
        $validacion = Validator::make(Input::all(), $reglas);

        if ($validacion->fails()){
            $respuesta = array('status' => false, 'msg' => $this->mensajesError($validacion));
        }
        else{
            $campos = Input::only('m', 'n', 't');
            $cubo = $matrix = new \App\classes\Cubo($campos['n'],$campos['m']);

            $this->data->setCubo($cubo);
            $this->data->setOperacion(0);
            $respuesta = array('status' => true, 'msg' => 'Se han cargado correctamente los datos del cubo.');
        }
        return Response::json($respuesta);
    }

    public function update(){
        $reglas = array(
            'x' => 'required|integer|min:1',
            'y' => 'required|integer|min:1',
            'z' => 'required|integer|min:1',
            'W' => 'required|integer|min:-1000000000|max:1000000000'
        );
        $validacion = Validator::make(Input::all(), $reglas);
        if ($validacion->fails()){
            $respuesta = array('status' => false, 'msg' => $this->mensajesError($validacion));
        }
        else{
            $cubo = $this->data->getCubo();
            if(!$cubo){
                $respuesta = array('status' => false, 'msg' => 'Error al cargar el cubo!');
            }else{
                $campos = Input::only('x', 'y', 'z', 'W');
                $cubo = $this->data->getCubo();
                $valorN = $cubo->getN();
                $valorM = $cubo->getM();
                $numOperacion = $this->data->getOperacion();
                if ($campos['x'] > $valorN || $campos['y'] > $valorN || $campos['z'] > $valorN) {
                    $respuesta = array('status' => false, 'msg' => 'Los valores exceden las dimensiones del cubo!');
                }
                else{
                    if($valorM >= $numOperacion){
                        $this->data->setOperacion($numOperacion+1);
                        $cubo->update($campos['x'],$campos['y'],$campos['z'],$campos['W']);
                        $this->data->setCubo($cubo);
                        $respuesta = array('status' => true, 'msg' => 'Operación ejecutada');
                    }
                    else{
                        $respuesta = array('status' => false, 'msg' => 'Excedido el numero de operaciones permitidas');
                    }
                }
            }
        }
        return Response::json($respuesta);
    }

    public function query(){
        //Consulta QUERY
        return Response::json(array('status' => true, 'msg' => 'CA'));
    }

    private function mensajesError($validacion){
        $mensajes = '';
        foreach ($validacion->messages()->all() as $msg){
            $mensajes = $mensajes.$msg.'<br>';
        }
        return $mensajes;
    }

}
