<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "Welcome, $name!";
} else {
?>
<form method="get">
  Name: <input name="name">
  <button type="submit">Register</button>
</form>
<?php } ?>
