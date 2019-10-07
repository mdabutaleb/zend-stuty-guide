<?php
function sum(...$numbers)
{
    print_r($numbers);
}

echo sum(1, 2, 3, 4, 'hello', new StdClass);