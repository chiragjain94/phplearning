<?php
if (isset($_COOKIE['name'])) {
  echo 'User name is ' . $_COOKIE['name'] . '<br>';
} else {
  echo "No user data found";
}


//update cookie any time.
//setcookie('name', "John the Great", time() + 3600);


//delete cookie - set the time in minus.
//setcookie('name', "John the Great", time() - 3600);

//count($_COOKIES) => get the count of cookies.
//print_r($_COOKIE) => echos all the cookies
