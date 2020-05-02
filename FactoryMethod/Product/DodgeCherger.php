<?php

namespace FactoryMethod\Product;

class DodgeCherger implements CarroProduct
{
    public function acelerar() 
    {
        echo "Acelerado Dodge Charger \n";
    }

    public function frear()
    {
        echo "Freando Dodge Charger \n";
    }

    public function trocarMarcha()
    {
        echo "Trocando marcha do Dodge Charger \n";
    }
}