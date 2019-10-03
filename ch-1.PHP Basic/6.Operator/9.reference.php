<?php
$a = 5;
$b = &$a;

$a += 5;
echo 'The output of $b is : ' . $b;
echo "<br/>";
echo 'The output of $a is : ' . $a;


class MyClass
{
    public function test($name = null)
    {
        echo "<br/>";
        echo "$name";
    }
}

$obj = new MyClass; // it will through an error
$obj = new MyClass;
$obj->test('Google Mahmud');

$obj1 = &$obj;

$obj1->test();


