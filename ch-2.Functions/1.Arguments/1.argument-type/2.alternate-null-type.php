<?php
function sayHello(?string $name)
{
    echo "Hello World";
}

echo sayHello(null);
echo sayHello();