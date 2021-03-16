<?php 

namespace Classes;
use Interfaces\AttackInterface;
use Interfaces\PlayerInterface;
class AttackPlayer implements PlayerInterface, AttackInterface{
    public function Attack(){
      echo "attack</br>";
    }
    public function  play(){
      $this->Attack();
    }
  
}
