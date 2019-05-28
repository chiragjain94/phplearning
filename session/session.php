<?php
//Always use session start to use the variables. Otherwise the value wont be shown.

session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];

print_r($_SESSION); //prints all the varible currently in session. 
//Array ( [name] => Chirag Jain [email] => chirag.jain@bombayworks.se )

//unset($_SESSION('name')) => name will be undefined. This way we can destory a value of varible from one session to another.
//To avoid such case where an undefined value is displayed, we should check the value first
//isset($_SESSION('name')) ?  $_SESSION('name') : "Other random value if main value is not there";

// session_destory - destorys all data registered in session.
// We can change the value any time in session by $_SESSION['email'] = "NEW VALUE WE WANT";
?>


<!DOCTYPE html>

<head>
  <title>
    Contact Form
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
  <h2>Page 1 where session varible are used</h2>
  <p>
    <?php echo "Your email address $email is subscribed to our newsletter. Thank you $name"; ?>
  </p>
</body>