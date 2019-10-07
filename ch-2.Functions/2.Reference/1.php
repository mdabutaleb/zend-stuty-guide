<?php
function getResult(&$var)
{
    $var = 100;
    unset($var);
}

$x = 5;
getResult($x);
echo $x;