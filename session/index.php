<?php

//Session data is stored on server.
if (isset($_POST['submit'])) {
  session_start();
  $_SESSION['name'] = htmlentities($_POST['name']);
  $_SESSION['email'] = htmlentities($_POST['email']);

  header('Location: session.php');
}
?>


<!DOCTYPE html>

<head>
  <title>
    Session
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container">
  <h5><a href="index.php">Session</a></h2>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="name">Name</label><br>
      <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"><br>

      <label for="email">Email</label><br>
      <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $email : ''; ?>"><br>

      <button type="submit" name="submit">Submit</button>
    </form>

    <footer>
      <p>My website &copy; 2019</p>
    </footer>
</body>

</html>