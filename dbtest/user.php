<?php
define('ROOT_URL', 'http://localhost:8888/test/dbtest/');
$connection = mysqli_connect("localhost", "root", "", "userdetails");
if (mysqli_errno($connection)) {
  echo "Somethimg went wrong";
}

// Check For Submit
if (isset($_POST['delete'])) {
  // Get form data
  $delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);

  $query = "DELETE FROM user WHERE id = {$delete_id}";

  if (mysqli_query($connection, $query)) {
    header('Location: ' . ROOT_URL . '');
  } else {
    echo 'ERROR: ' . mysqli_error($connection);
  }
}

$id = mysqli_real_escape_string($connection, $_GET['id']);
$query = "Select *from user WHERE id= {$id}";

$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);
// echo ($user['id']);
?>

<h1>Details</h1>
<?php

echo $user['name'] . '<br>';
echo $user['email'] . '<br>';
?>


<a href="<?php echo ROOT_URL; ?>edituser.php?id=<?php echo $user['id']; ?>" class="btn btn-primary">Edit</a>

<a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="hidden" name="delete_id" value="<?php echo $user['id']; ?>">
  <input type="submit" name="delete" value="Delete" class="btn btn-danger">
</form>