<?php 

namespace Classes;
use Interfaces\PlayerInterface;

class AttackPlayer implements PlayerInterface{
    public function play(){
        echo "Attack";
    }
}
