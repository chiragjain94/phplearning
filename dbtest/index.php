<?php
define('ROOT_URL', 'http://localhost:8888/test/dbtest/');

$connection = mysqli_connect("localhost", "root", "", "userdetails");

if (mysqli_errno($connection)) {
  echo "Somethimg went wrong";
}

$query = "Select *from user";

$result = mysqli_query($connection, $query);
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<h1>Home</h1>
<a href="adduser.php">Add New </a><br><br>
<?php
foreach ($user as $person) {
  echo $person['name'] . '<br>';
  echo $person['email'] . '<br>';
  ?>
  <a href="user.php?id=<?php echo $person['id']; ?> ">
    Details</a><br><br>
<?php } ?>