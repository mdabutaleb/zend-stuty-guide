<?php

#Long ternary syntax
$description = (isset($_GET['short_description'])) ? $_GET['short_description'] : 'Not set';
echo $description. "<br/>";

#Equivalent syntax using null coalescing operator
$description = $_GET['short_description'] ?? 'Not set';
echo $description . "<br/>";


#Null coalescing operator can be chained
