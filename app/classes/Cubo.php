<?php

namespace App\classes;


class Cubo {

    private $m; //M Define el número de operacionesa realizar.
    private $n; //N Define el número de posiciones como aristas del cubo.
    private $cubo; //El cubo que contendrá los datos.

    function __construct($n, $m)
    {
        $this->n = $n;
        $this->m = $m;
        $this->iniciaCubo($n);
    }

    private function iniciaCubo($n){

        for ($i = 0; $i <= $n; $i++) {
            for ($j = 0; $j <= $n; $j++) {
                for ($k = 0; $k <= $n; $k++) {
                    $this->cubo[$i][$j][$k] = 0;
                }
            }
        }
    }

    public function getN(){
        return $this->n;
    }

    public function getM(){
        return $this->m;
    }
    public function getCubo(){
        return $this->cubo;
    }

    public function update($x, $y, $z, $W){
        $this->cubo[$x][$y][$z] = $W;
        return $W;
    }

    public function query($x1, $y1, $z1, $x2, $y2, $z2){
        $total = 0;
        for ($i = $x1; $i <= $x2; $i++) {
            for ($j = $y1; $j <= $y2; $j++) {
                for ($k = $z1; $k <= $z2; $k++) {
                    $total += $this->cubo[$i][$j][$k];
                }
            }
        }
        return $total;
    }


}