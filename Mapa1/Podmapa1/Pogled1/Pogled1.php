<?php

namespace Mapa1\Podmapa1\Pogled1 ;


use PogledInterface\PogledInterface as PogledInterface1;

class Pogled1 implements PogledInterface1 {


    public function viewAction()
    {
        return self::class;
    }
}

