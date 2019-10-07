<?php
function getFullName(string $firstName, string $lastName): void
{
    echo $firstName . " " . $lastName;
}

$value = getFullName('Sumon', 'Mahmud');
echo $value;