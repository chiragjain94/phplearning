<?php

// example to understand that an abstract  
// class can not contain an mehtod with 
// body in php 
// abstract class Base
// {
//   abstract function printdata();
// {
// echo "Parent class printdata"; 
// }
// }


// Abstract class 
abstract class Base
{
  // function __construct() { 
  //     echo "this is abstrct class constructor "; 
  // } 

  // This is abstract function 
  abstract function printdata();
}
class Derived extends base
{
  function __construct()
  {
    echo "\n Derived class constructor";
  }
  function printdata()
  {
    echo "\n Derived class printdata function";
  }
}
$b1 = new Derived;
$b1->printdata();
