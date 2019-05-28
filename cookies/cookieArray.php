<?php
$user = [
  'name' => 'Chirag',
  'email' => 'Chirag@gmail.com',
  'age' => 24
];

//Array cookies cant be directly store. so we have to serialize them.
$user = serialize($user);

setcookie('user', $user, time() + 3600);

//unserialize it to get the data from cookie array. 
$user = unserialize($_COOKIE['user']);

echo $user['name'];
print_r($user);
