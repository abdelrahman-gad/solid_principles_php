<?php 

namespace Classes;
use Interfaces\PlayerInterface;
class DefencePlayer implements PlayerInterface{
    public function play(){
        echo "Defence";
    }
}
