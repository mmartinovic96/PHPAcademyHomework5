<?php

namespace index;
include 'Prefix/Prefix.php';

use Prefix\Prefix as date;

abstract class Index extends date
{

    protected $object1;
    protected $object2;
    protected $object3;
    protected $product;

    public function randClass()
    {
        $options = array($this->object1, $this->object2, $this->object3);
        $this -> product = array_rand(array_flip($options));
    }

}
