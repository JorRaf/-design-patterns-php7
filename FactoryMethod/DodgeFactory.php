<?php

namespace FactoryMethod;

use FactoryMethod\Product\{CarroProduct, DodgeDart, DodgeCherger};

class Dodgefactory implements CarroFactory
{
    /**
     * @param string $modelocarro
     * @return Carroproduct
     * @throws \Exception
     */
    public function criarCarro(string $modelocarro): CarroProduct
    {
        if ($modelocarro == 'charger') {
            return new DodgeCherger();
        }elseif($modelocarro == 'dart'){
            return new DodgeDart();
        }else{
            throw new \Exception("Modelo de carro \"{$modelocarro}\" nao existe");
        }
    }
}