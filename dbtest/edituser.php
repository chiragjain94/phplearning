<?php define('ROOT_URL', 'http://localhost:8888/test/dbtest/');

$connection = mysqli_connect("localhost", "root", "", "userdetails");

if (mysqli_errno($connection)) {
  echo "Somethimg went wrong";
}

// Check For Submit
if (isset($_POST['submit'])) {
  // Get form data
  $updated_id = mysqli_real_escape_string($connection, $_POST['update_id']);
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);

  $query = "UPDATE user SET
          name = '$name',
          email = '$email'
            WHERE id={$updated_id}";

  if (mysqli_query($connection, $query)) {
    header('Location: ' . ROOT_URL . '');
  } else {
    echo 'ERROR: ' . mysqli_error($connection);
  }
}
// get ID
$id = mysqli_real_escape_string($connection, $_GET['id']);

// Create Query
$query = 'SELECT * FROM user WHERE id = ' . $id;

// Get Result
$result = mysqli_query($connection, $query);

// Fetch Data
$user = mysqli_fetch_assoc($result);
//var_dump($posts);

// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($connection);

?>

<h1>EDIT</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"><br>
  Name - <input value="<?php echo $user['name']; ?>" name="name"><br>
  Email - <input value="<?php echo $user['email']; ?>" name="email"><br>

  <input type="hidden" name="update_id" value="<?php echo $user['id']; ?>">
  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>