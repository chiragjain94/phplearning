<?php
#for loops
for ($i = 0; $i < 10; $i++) {
  echo 'Number ' . $i;
  echo '<br>';
}

#while loop
$r = 0;
while ($r < 5) {
  echo 'No ' . $r;
  echo '<br>';
  $r++;
}

#do while - do runs atleast once
$a = 0;
do {
  echo 'New ' . $r;
  echo '<br>';
  $a++;
} while ($a > 10);

#foreach loop
$people = array("A", "B", "C");
foreach ($people as $person) {
  echo $person;
  echo '<br>';
}

$people1 = array('Brad' => 23, 'Chirag' => 24);
foreach ($people1 as $person => $age) {
  echo "$person : $age";
  echo '<br>';
}
