<?php
function complicated($compulsory, ...$extras) {
    echo "I have " . func_get_args() . " arguments";
}
complicated(1,2,3,4);