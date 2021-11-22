<?php
namespace App\Controller;

class ControllerSitemap {
    public function testeMetodo($carro = 0, $bike = 0)
    {
        if ($carro !== 0 && $bike !== 0) {
        echo "este é um {$carro} com valor de 1000 reais, junto a uma {$bike} de valor inestimável.";
        }
    }

    public function  teste2() {
        echo "Esse é o teste 2";
    }
}