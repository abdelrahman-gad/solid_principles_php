<?php 

namespace Classes;
use Interfaces\PlayerInterface;
class MiddlePlayer implements PlayerInterface{
    public function play(){
        echo "Middle </br>";
    }
}
