<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars($_POST['username'] ?? '');
    $pass = htmlspecialchars($_POST['password'] ?? '');

    // Simple hardcoded check (replace with DB in real apps)
    if ($user === 'admin' && $pass === '1234') {
        $_SESSION['loggedin'] = true;
        echo "Login successful!";
    } else {
        echo "Invalid credentials.";
    }
}
?>
<form method="post">
  Username: <input name="username"><br>
  Password: <input type="password" name="password"><br>
  <button type="submit">Login</button>
</form>
