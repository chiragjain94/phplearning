<?php
#https://www.php.net/manual/en/language.types.array.php
//Indexed Arrays
$people = array("A", "B", "C");
$ids = array(1, 2, 3, 4, 5);
$cars = ['Honda', 'Tata', 'BMW'];
$cars[3] = 'Chevy';
$cars[] = 'Merc'; //Automcatically adds the data at the end.

echo $people[2];
echo $ids[1];
echo $cars[4];

echo count($cars);

//Prints complete array - 
//Array ( [0] => Honda [1] => Tata [2] => BMW [3] => Chevy [4] => Merc )
print_r($cars);

/*
    Prints complete array with data type - 
      array (size=5)
      0 => string 'Honda' (length=5)
      1 => string 'Tata' (length=4)
      2 => string 'BMW' (length=3)
      3 => string 'Chevy' (length=5)
      4 => string 'Merc' (length=4)
  */
var_dump($cars);


//Associate Arrays - Key value kind of array
$people = array('Brad' => 23, 'Chirag' => 24);
$ids = [22 => 'Chirag', 25 => 'Jain'];

echo $people['Brad'];
echo $ids[22];
$people['Alister'] = 26;
echo $people['Alister'];
print_r($people);
var_dump($people);

//Multi-Dimensional Array inside array
$cars = array(
  array('Honda', 22, 21),
  array('TATA', 12, 1),
  array('BMW', 28, 51),
);

echo $cars[0][0];
