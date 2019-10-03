<?php

class MyException extends Exception
{
}

class ChildException extends MyException
{
}

try {
    throw new ChildException();
} catch (Exception $e) {
    echo "Caught Exception: " . get_class($e);
} catch (MyException $e) {
    echo "Caught MyException" . get_class($e);
}