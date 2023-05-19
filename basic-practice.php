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
$age=array("peter"=>"20", "eli"=>"28");
foreach($age as $x=>$value){
    echo "$x=$value<br>";
}

?>