<!-- 2.2 Write a PHP code for sorting an array entered by user. -->

<!DOCTYPE html>
<html>
<head>
    <title>Array Sorting</title>
</head>
<body>
    <h2>Enter numbers separated by commas:</h2>
    <form method="post">
        <input type="text" name="numbers" placeholder="e.g. 23,12,5,89,45">
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get input and convert into array
        $input = $_POST["numbers"];
        $arr = explode(",", $input);

        // Trim spaces
        $arr = array_map('trim', $arr);

        // Sort array
        sort($arr);

        echo "<h3>Sorted Numbers:</h3>";
        foreach ($arr as $num) {
            echo $num . "<br>";
        }
    }
    ?>
</body>
</html>
