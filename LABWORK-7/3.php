<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['file'])) {
    $filename = basename($_FILES['file']['name']);
    echo "Uploaded file: " . htmlspecialchars($filename);
}
?>
<form method="post" enctype="multipart/form-data">
  Select file: <input type="file" name="file">
  <button type="submit">Upload</button>
</form>
