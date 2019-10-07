<?php

function &returnByReference(){
    $a = 50;
    return $a;
}

$value = &returnByReference();
$test = &$value;
//$value = 20;
echo $test;