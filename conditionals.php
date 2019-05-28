<?php
#Conditionals

/*
      ==
      ===
      >
      <
      !=
      !==
      <=
      >=
    */

//If statement
$num = "5";

if ($num == 5) {
  echo "5 passed";
} elseif ($num == 6) {
  echo "6 passed";
} else {
  echo "did not pass";
}

//Nesting if
if ($num > 4) {
  if ($num < 10) {
    echo "<br> Num passed";
  }
}

#Logical Operators
/*  
      and &&
      or ||
      xor  (One has to be true). for same value like 00 and 11, its always false. 
    */

if ($num > 4 and $num < 10) {
  echo "<br>pass";
}

#Switches

$favColor = "red";
switch ($favColor) {
  case 'red';
    echo "my fav";
    break;
  case 'blue';
    echo "nah";
    break;
  case 'green';
    echo "nope";
    break;
  default:
    echo "Nothing works";
}
