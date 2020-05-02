<?php

namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
    public function acelerar() 
    {
        echo "Acelerado Dodge Dart \n";
    }

    public function frear()
    {
        echo "Freando Dodge Dart \n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do Dodge Dart \n";
    }
}