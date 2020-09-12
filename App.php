<?php

namespace App;

require 'PogledInterface/PogledInterface.php';
include 'Mapa1/Podmapa1/Pogled1/Pogled1.php';
include 'Mapa2/Podmapa2/Pogled2/Pogled2.php';
include 'Mapa3/Podmapa3/Pogled3/Pogled3.php';
$path = 'index.php';
$rpath = realpath($path);
require "$rpath";


use Mapa1\Podmapa1\Pogled1\Pogled1 as view1;
use Mapa2\Podmapa2\Pogled2\Pogled2 as view2;
use Mapa3\Podmapa3\Pogled3\Pogled3 as view3;
use index\Index as exApp;


final class App extends exApp {

    protected $object1;
    protected $object2;
    protected $object3;
    protected $product;

    public function setObject($object1, $object2, $object3)
    {
        $this->object1 = $object1;
        $this->object2 = $object2;
        return $this->object3 = $object3;
    }
    public function getObject()
    {
        parent::randClass();
        return parent::getDate().'<br>'.$this->product;
    }

};

$p1 = new view1();
$p2 = new view2();
$p3 = new view3();

$p = new App();
$p ->setObject($p1->viewAction(),$p2->viewAction(),$p3->viewAction());
echo $p -> getObject();