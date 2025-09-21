<!-- 2.6 Write a PHP code for user define function for calculator, take input from user by
creating simple html form. -->

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        Number 1: <input type="text" name="num1" required><br><br>
        Number 2: <input type="text" name="num2" required><br><br>
        Operation: 
        <select name="op">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <br><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // User-defined function
    function calculator($a, $b, $op) {
        switch($op) {
            case "add": return $a + $b;
            case "sub": return $a - $b;
            case "mul": return $a * $b;
            case "div": return $b != 0 ? $a / $b : "Error (Divide by Zero)";
            default: return "Invalid Operation";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        $result = calculator($num1, $num2, $op);

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
