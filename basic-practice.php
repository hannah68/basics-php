<?php
// echo strlen("Hello world!");
// echo str_word_count("Hello world!");
// echo strrev("Hello world!");
// echo strpos("Hello world!", "world");
// echo str_replace("world", "Dolly", "Hello world!");
// // $x = 1.9e411;
// $x = acos(8);
// var_dump(is_int($x));
// var_dump(is_float($x));
// var_dump(is_nan($x));

// $x = 5985;
// var_dump(is_numeric($x));
// echo "<br>";

// $x = "5985";
// var_dump(is_numeric($x));
// echo "<br>";

// $x = "59.85" + 100;
// var_dump(is_numeric($x));
// echo "<br>";

// $x = "Hello";
// var_dump(is_numeric($x));
// echo "<br>";

// // Cast float to int
// $x = 23465.768;
// $int_cast = (int)$x;
// echo $int_cast;
// echo "<br>";

// // Cast string to int
// $x = "23465.768";
// $int_cast = (int)$x;
// echo $int_cast;
// echo "<br>";

// // round to the nearest num
// echo(round(0.60));  // returns 1
// echo "<br>";

// random num between 10,100
// echo(rand(10, 100));

// create a constant with a case-sensitive name
// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;

// Constant Arrays
// define("cars", ["Alfa Romeo","BMW","Toyota"]);
// echo cars[0];

// Constants are automatically global and can be used across the entire script.
// define("GREETING", "Welcome to W3Schools.com!");
// function myTest() {
//   echo GREETING;
// }
// myTest();

// if/else condition
// $t=date("H");
// if($t < "20"){
//     echo "have a good day";
// }


// $x = 1;
// while loop
// while($x <= 5) {
//     echo "The number is: $x <br>";
//     $x++;
// }

// do...while loop
// do{
//     echo "The number is: $x <br>";
//     $x++;
// }while($x <= 5);

// for loop
// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
// }

// foreach loop
// $colors=array("red", "blue", "green");
// foreach($colors as $value){
//     echo "$value <br>";
// }
// $age=array("peter"=>"20", "eli"=>"28");
// foreach($age as $x=>$value){
//     echo "$x=$value<br>";
// }

// break
// for ($x = 0; $x < 10; $x++) {
//     if ($x == 4) {
//       break;
//     }
//     echo "The number is: $x <br>";
// }

// continue(The continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
// This example skips the value of 4:)
// for ($x = 0; $x < 10; $x++) {
//     if ($x == 4) {
//       continue;
//     }
//     echo "The number is: $x <br>";
// }

// type declaration
// declare(strict_types=1); // strict requirement
// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown


// function addNumbers(float $a, float $b) : int {
//     return (int)($a + $b);
// }
// echo addNumbers(1.2, 5.2);

// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.
// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:
// function add_five(&$value) {
//     $value += 5;
// }
// $num = 2;
// add_five($num);
// echo $num;

// array
// $cars = array("Volvo", "BMW", "Toyota");
// echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

// Get The Length of an Array 
// $cars = array("Volvo", "BMW", "Toyota");
// echo count($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// $arrlength = count($cars);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// echo "Peter is " . $age['Peter'] . " years old.";

// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }

// sort
// $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);
// $clength = count($cars);
// for($x = 0; $x < $clength; $x++) {
//   echo $cars[$x];
//   echo "<br>";
// }

// ascending numerical order
// $numbers = array(4, 6, 2, 22, 11);
// sort($numbers);
// $arrlength = count($numbers);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $numbers[$x];
//   echo "<br>";
// }

// descending numerical order
// $numbers = array(4, 6, 2, 22, 11);
// rsort($numbers);
// $arrlength = count($numbers);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $numbers[$x];
//   echo "<br>";
// }

// Sort Array (Ascending Order), According to Value - asort()
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// asort($age);
// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }

// Sort Array (Ascending Order), According to Key - ksort()
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// ksort($age);
// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }

// Sort Array (Descending Order), According to Value - arsort()
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// arsort($age);
// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }

// Sort Array (Descending Order), According to Key - krsort()
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// krsort($age);
// foreach($age as $x => $x_value) {
//   echo "Key=" . $x . ", Value=" . $x_value;
//   echo "<br>";
// }
?>