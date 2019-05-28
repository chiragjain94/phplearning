<?php
#https://www.php.net/manual/en/functions.user-defined.php
//Create function
function simpleFunction()
{
  echo "Hello World <br>";
}

//Run simple function 
simpleFunction();

//Funtcion with params
function sayHello($name = "World")
{
  echo "Hello $name<br>";
}
sayHello("Chirag");
sayHello(); //Take the default value defined in the function

//function with return value
function addNumber($num1, $num2)
{
  return $num1 + $num2;
}
echo addNumber(6, 7);


//without refernce
$myNum = 10;

function addFive($num)
{
  $num += 5;
  echo $num;
}
addFive($myNum);
echo $myNum;  //echo 10

//Passing refernce with & sign ahead 
function addTen(&$num)
{
  $num += 10;
}
addTen($myNum);
echo $myNum; //echo 20
