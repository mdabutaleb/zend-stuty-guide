<?php
$a = 6;
$b = 6;
if ($a !== $b) {
    echo "I know ";
} else {
    echo "I DON'T KNOW";
}


#For array it's count the number of value
echo "<br/>";
$c = [1, 2];
$d = [2];

if ($c > $d) {
    echo "dont know what is happening";
} else {
    echo "Yes";
}
echo "<br/>";
$x = 11;
$y = 11;

if ($x <=> $y) {
    echo "I love true";
} else {
    echo "I hate false";
}


echo "<br/>";
if (-1) echo "Yes this true";