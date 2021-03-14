<?php 

namespace Classes;
use Interfaces\PlayerInterface;
use Players\ElhadaryChild;
use Players\ElhadaryFather;
class GoalKeeperPlayer implements PlayerInterface{
    public function play(){
        $keeper = new ElhadaryChild;
        echo $keeper->keeping();
    }
}
 