<?php

class Toto
{
    function add($a, $b){
        return $a + $b;
    }

    function average(int $a, int $b) : int{
        return intdiv($this->add($a, $b), 2);
    }
}