<?php
define('ROOT_URL', 'http://localhost:8888/test/dbtest/');
$connection = mysqli_connect("localhost", "root", "", "userdetails");
if (mysqli_errno($connection)) {
  echo "Somethimg went wrong";
}

if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);

  $query = "INSERT INTO user(name, email) VALUES('$name', '$email')";

  if (mysqli_query($connection, $query)) {
    header('Location: ' . ROOT_URL . '');
  } else {
    echo 'ERROR: ' . mysqli_error($connection);
  }
}
?>
<h1>Add new</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <label>Name</label><input type="text" name="name"><br><br>
  <label>Email</label><input type="text" name="email"><br><br>
  <button type="submit" name="submit" value="Submit">Submit</button>
</form>