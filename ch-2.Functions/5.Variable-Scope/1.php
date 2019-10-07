<?php

$string = 'I love my country';
function getMyLove()
{
    $anyname = $GLOBALS['string'];
    $anyname = 'I love my mother';
    echo $anyname;
}

getMyLove();