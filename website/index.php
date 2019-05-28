<?php require_once "inc/header.php"; ?>
<?php require_once "inc/serverinfo.php"; ?>
<h1> Home </h1>

<div>
  <h2>Server Info</h2>
  <?php if ($server) : ?>
    <ul>
      <?php foreach ($server as $key => $value) : ?>
        <li>
          <?php echo "$key - $value"; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</div>

<?php require_once "inc/footer.php";
?>