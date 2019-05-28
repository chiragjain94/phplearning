<?php
$people[] = "Chirag";
$people[] = "Chill";
$people[] = "Tom";
$people[] = "jay";
$people[] = "Raj";
$people[] = "Mital";

//Get query string 
$query = $_REQUEST['q'];

$suggestion = "";

if ($query !== "") {
  $query = strtolower($query);
  $querylength = strlen($query);

  foreach ($people as $person) {
    if (stristr($query, substr($person, 0, $querylength))) {
      if ($suggestion === "") {
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}

echo $suggestion === "" ? "No suggestion found." : $suggestion;
