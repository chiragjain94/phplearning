<?php
if (isset($_GET['name'])) {  //The isset () function is used to check whether a variable is set or not
  $name = htmlentities($_GET['name']);
  echo $name;
}

// if (isset($_POST['name'])) {  //The isset () function is used to check whether a variable is set or not
//   $name = htmlentities($_POST['name']);
//   echo $name;
// }

// if (isset($_REQUEST['name'])) {  //The isset () function is used to check whether a variable is set or not
//   $name = htmlentities($_REQUEST['name']);
//   echo $name;
// }

echo $_SERVER['QUERY_STRING']; //name=Chirag+Jain&email=chirag.jain%40bombayworks.se
?>


<!DOCTYPE html>
<html>

<head>
  <title>
    My website
  </title>
</head>
<li><a href="index.php">Home</a></li>

<body>
  <form method="GET" action="get_post.php">
    <div>
      <label>Name</label><br>
      <input type="text" name="name">
    </div>

    <div>
      <label>Email</label><br>
      <input type="text" name="email">
    </div>
    <input type="submit" value="submit">
  </form>

  <ul>
    <li>
      <a href="get_post.php?name=Brad">Brad</a>
    </li>
    <li>
      <a href="get_post.php?name=Steve">Steve</a>
    </li>
  </ul>
  <?php echo "{$name}'s Profile"; ?>

  <body>

</html>