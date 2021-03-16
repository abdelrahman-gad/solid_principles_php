<?php 

namespace Classes;
use Interfaces\KeepingInterface;
use Interfaces\PlayerInterface;
use Players\ElhadaryChild;
use Players\ElhadaryFather;

class GoalKeeperPlayer implements PlayerInterface,KeepingInterface{

    public function Keeping(){
       echo "goal Keeping</br>";
    }
   public function play(){
       $this->Keeping();
   }
}
 