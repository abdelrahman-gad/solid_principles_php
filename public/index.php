
<?php


require __DIR__ . '/../vendor/autoload.php';

$players=[];
for ($i=0; $i < 12; $i++) { 

  array_push($players , new  \Classes\Player());

}



 $match = new \Classes\Match($players);
 $match->start();