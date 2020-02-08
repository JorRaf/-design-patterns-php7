#!/usr/bin/php
<?php

require('Singleton.php');

use Instancia\Singleton;

$instancia = Singleton::obterInstancia();

$novaInstancia = Singleton::obterInstancia();

if($instancia === $novaInstancia)
{
    printf("As instancias ṣao as mesmas!\n");
}