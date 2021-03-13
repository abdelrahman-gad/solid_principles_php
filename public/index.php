
<?php


require __DIR__ . '/../vendor/autoload.php';

$players=[];
array_push($players , new  \Classes\GoalKeeperPlayer());
for ($i=0; $i < 4; $i++) { 
    array_push($players , new  \Classes\DefencePlayer());
}
for ($i=0; $i < 4; $i++) { 
    array_push($players , new  \Classes\MiddlePlayer());
}
for ($i=0; $i < 2; $i++) { 
    array_push($players , new  \Classes\AttackPlayer());
}


 $match = new \Classes\Match($players);
 $match->start();