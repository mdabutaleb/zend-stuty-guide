<?php
function magic($p, $q)
{
    return ($q == 0)    ? $p    : magic($q, $p % $q);
}

echo magic(55, 6);

echo "<br/>";
echo strtotime("january 1, 1971");

echo "<br/>";
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1995));
echo "<br/>";
