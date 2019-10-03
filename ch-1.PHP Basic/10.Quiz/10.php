<?php
define('A', 1);
const B = 2;
define('C', [A * A, B * B]);
echo(C[1]);