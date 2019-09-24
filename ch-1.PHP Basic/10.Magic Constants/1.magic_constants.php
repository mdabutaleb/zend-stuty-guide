<?php
echo __LINE__;
echo "<br/>";
echo __FILE__;

class  User
{

    public static function getUserList()
    {
        echo __CLASS__;
        echo "<br/>";
        echo __METHOD__;
    }
}

echo "<br/>";
User::getUserList();

function myFunction()
{
    echo "Hello world<br/>";
    echo __FUNCTION__;
}

myFunction();

