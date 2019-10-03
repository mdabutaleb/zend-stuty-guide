<?php
$a = "new string";
//$b = $a;
$c = &$a;
//$d = $a;
$e = &$a;
xdebug_debug_zval( 'a' );