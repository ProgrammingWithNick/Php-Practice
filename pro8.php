<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>
    <h2>PHP Array Operations</h2>
    <form method="post">
        <label>Enter values for Array 1 (comma separated):</label><br>
        <input type="text" name="arr1" required><br><br>

        <label>Enter values for Array 2 (comma separated):</label><br>
        <input type="text" name="arr2" required><br><br>

        <input type="submit" name="submit" value="Perform Operations">
    </form>

    <hr>

    <?php
    if (isset($_POST['submit'])) {
        // Get user input and convert to arrays
        $arr1 = explode(",", $_POST['arr1']);
        $arr2 = explode(",", $_POST['arr2']);

        // Trim spaces
        $arr1 = array_map('trim', $arr1);
        $arr2 = array_map('trim', $arr2);

        echo "<h3>Results:</h3>";

        // (a) Print values of array 1
        echo "Array 1: ";
        print_r($arr1);
        echo "<br><br>";

        // (b) Reverse an array
        echo "Reversed Array 1: ";
        print_r(array_reverse($arr1));
        echo "<br><br>";

        // (c) Merge two arrays in sorted manner
        $merged = array_merge($arr1, $arr2);
        sort($merged);
        echo "Merged & Sorted Array: ";
        print_r($merged);
        echo "<br><br>";

        // (d) Add values of all elements of array 1
        // Ensure numeric values
        $arr1_numeric = array_map('intval', $arr1);
        $sum = array_sum($arr1_numeric);
        echo "Sum of Array 1 elements: $sum <br>";
    }
    ?>
</body>
</html>
