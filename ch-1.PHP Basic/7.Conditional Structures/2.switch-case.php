<?php
$a = 15;

switch ($a) {
    case 10:
        $b = 10;$c = 20;echo $b + $c;echo "<br/>";
    case 15:
        $b = 30;$c = 40;echo $b + $c;echo "<br/>";
    case 20:
        $b = 50;$c = 60;echo $b + $c;echo "<br/>";
    default:
        echo "Nothing is true";

}

