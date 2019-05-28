<?php
if (filter_has_var(INPUT_POST, 'data')) {
  $email = $_POST['data'];

  //remove illegal charcters
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  echo $email . '<br>';

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is valid";
  } else {
    echo "Email is invalid";
  }
}
$filter = array(
  "data" => FILTER_VALIDATE_EMAIL,
  "data2" => array(
    "filter" => FILTER_VALIDATE_INT,
    "options" => array(
      "min_range" => 1,
      "max_range" => 100
    )
  )
);

print_r(filter_input_array(INPUT_POST, $filter));

?>

<div>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">submit</button>
  </form>
</div>