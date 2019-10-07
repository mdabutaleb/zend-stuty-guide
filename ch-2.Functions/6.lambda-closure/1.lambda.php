<?php
#Assign lambda function to variable
$multiply = function ($a, $b) {
    return $a * $b;
};
echo $multiply(5, 10); // output is 50
echo "<br/>";

#Pass lambda function to other function

//function countEmail($number){
//    echo "You have total $number Email";
//}
//countEmail($multiply(5, 10));
//echo "<br/>";

#You can also call lambda in other function
//function countEmail($multiply, $a, $b ){
//    echo "You have total " . $multiply($a, $b). " Email";
//}
//countEmail($multiply, 5, 10);
//echo "<br/>";


#Even also possible by
//function countEmail($multiply, $a, $b)
//{
//    echo "You have total " . $multiply($a, $b) . " Email";
//}
//
//countEmail(function ($num1, $numb2) {
//    return $num1 * $numb2;
//}, 5, 10);
//

#assign lambda to array

//$array['multiply'] = function ($a, $b) {
//    return $a * $b;
//};
//
//echo "the value is : ". $array['multiply'](5, 10);
//

# Add even an object
$obj = new StdClass();
$obj->multiply = function ($a, $b){
    return $a * $b;
};

$multiply = $obj->multiply;
echo "The output is by object oriented: ". $multiply(5, 10);

























