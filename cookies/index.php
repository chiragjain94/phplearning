<?php
//Cookies data is stored in client browser. Session over cookies always as they are secure. 
//with Cookies we can set expiration data even after browser closes. 

if (isset($_POST['submit'])) {
  $name = htmlentities($_POST['name']);

  setcookie('name', $name, time() + 3600);
  header('Location: cookie.php');
} ?>

<!DOCTYPE html>

<head>
  <title>
    Cookies
  </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="container">
  <h5><a href="index.php">Cookies</a></h2>
    <h5><a href="cookieArray.php">Cookies Array</a></h2>


      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name</label><br>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $name : ''; ?>"><br>

        <button type="submit" name="submit">Submit</button>
      </form>

      <footer>
        <p>My website &copy; 2019</p>
      </footer>
</body>

</html>