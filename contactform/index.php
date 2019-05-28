<?php

$msg = "";
$msgClass = "";

if (filter_has_var(INPUT_POST, 'submit')) {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  if (!empty($name) && !empty($email) && !empty($message)) {
    if ((filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
      $msg = "enter correct email id";
      $msgClass = "alert-danger";
    } else {
      $msg =  "correct details received";
      $msgClass = "alert-success";
    }
  } else {
    $msg = "fill all fields";
    $msgClass = "alert-danger";
  }
}
?>


<!DOCTYPE html>

<head>
  <title>
    Contact Form
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container">
  <h5><a href="index.php">Home</a></h2>

    <div>
      <h3 class="alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </h3>
    </div>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="name">Name</label><br>
      <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"><br>

      <label for="email">Email</label><br>
      <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>"><br>

      <label for="message">Message</label><br>
      <input type="text" name="message" value="<?php echo isset($_POST['message']) ? $message : ''; ?>"><br>

      <button type="submit" name="submit">Submit</button>
    </form>

    <footer>
      <p>My website &copy; 2019</p>
    </footer>
</body>

</html>