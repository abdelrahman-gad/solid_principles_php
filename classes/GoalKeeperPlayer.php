<?php 

namespace Classes;
use Interfaces\PlayerInterface;
class GoalKeeperPlayer implements PlayerInterface{
    public function play(){
        echo "Goal keep";
    }
}
