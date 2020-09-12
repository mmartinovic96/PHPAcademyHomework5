<?php
namespace Prefix;


abstract class Prefix
{
    private $date;


    public function getDate()
    {
        $this ->date = date('d/m/Y');
        return $this->date ;
    }
}

