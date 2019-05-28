<?php
$loggedIn = true;

echo ($loggedIn) ? "Logged in" : "Not logged In";

$age = 7;
$score = 12;

echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exception') : ($age > 10 ? 'Horrible' : 'Average'));
