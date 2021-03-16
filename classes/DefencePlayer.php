<?php 

namespace Classes;
use Interfaces\DefenceInterface;
use Interfaces\PlayerInterface;
class DefencePlayer implements PlayerInterface , DefenceInterface{
 
    public function Defence(){
       echo "defence</br>";
    }
    public function Play(){
      $this->Defence();   
    }
}

