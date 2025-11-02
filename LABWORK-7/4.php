<?php
if (isset($_POST['theme'])) {
    setcookie('theme', $_POST['theme'], time()+3600*24*30); // 30 days
    $_COOKIE['theme'] = $_POST['theme']; // update current request
}
$theme = $_COOKIE['theme'] ?? 'default';
echo "Current theme: " . htmlspecialchars($theme);
?>
<form method="post">
  <select name="theme">
    <option value="light">Light</option>
    <option value="dark">Dark</option>
  </select>
  <button type="submit">Set Theme</button>
</form>
