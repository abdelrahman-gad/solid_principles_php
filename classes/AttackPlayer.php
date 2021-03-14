<?php 

namespace Classes;
use Interfaces\AttackInterface;

class AttackPlayer implements AttackInterface{
    public function Attack(){
      return "attack";
    }
  
}
