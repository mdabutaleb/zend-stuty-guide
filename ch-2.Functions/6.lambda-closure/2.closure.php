<?php
$message = "I love my country";
//$sayHello = function () use ($message) {
//    echo $message;
//};
//
//$sayHello();

# Use reference as closure argument
//$sayHello = function () use (&$message) {
//    echo $message;
//    $message = 'I love my mother';
//};
//
//$sayHello();
//echo "<br/>";
//$sayHello();

# Use regular argument & closure argument at a time
//$var = "Hello";
//$message = "World !";
//$sayHello = function ($var) use ($message) {
//    echo $var . " " . $message;
//};
//
//$sayHello($var);

# Create recursive function using closure:
$factorial = function( $n ) use ( &$factorial ) {
    if( $n == 1 ) return 1;
    return $factorial( $n - 1 ) * $n;
};

echo $factorial( 6 );