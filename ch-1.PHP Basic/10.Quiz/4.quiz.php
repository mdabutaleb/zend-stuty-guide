<?php

function A() {
    try {
        b();
    } catch (Exception $e) {
        echo "Exception caught in " . __CLASS__;
    }
}
function B() {
    C();
}
try {
    A();
} catch (Error $e) {
    echo "Error caught in global scope: " . $e->getMessage();
}