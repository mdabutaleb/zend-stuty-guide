<?php
$dbConnection = mysqli_connect('localhost', 'admin_rename', '111111');
echo "<pre>";
print_r($dbConnection);


function test(){
    $test = "Best";
    echo $test;
}

@test();

echo "<br/>";
#both are same
echo shell_exec('whoami');
echo `whoami`;