<?php 

namespace  Classes;

class Match
{

    private $playerList;

    public function __construct(Array $players)
    {
        $this->playerList = $players;
    }
// Note : now class Match which is a hign level class depends on [AttackPlayer,DefencePlayer,GoalKeeperPlayer] and they are low level 
// classes which violates the dependency inversion principle 
    public  function  start(){
        echo "start match";
        echo "<br/>";
        foreach($this->playerList as $player){
           if($player instanceof AttackPlayer){
               $player->Attack();
           }else if($player instanceof DefencePlayer){
               $player->Defence();
           }else if($player instanceof GoalKeeperPlayer){
              $player->Keeping();
           }

        }

    }



}