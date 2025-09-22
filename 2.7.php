<!-- 2.7 Write a PHP code to use mysql string manipulation functions as given bellow:
Length(),concat(),concat_ws(),trim(),rtrim(),ltrim(),lpad(),rpad(),locate(),strstr(),subst
r(),lcase(),ucase(),repeat(),replace(). -->

<?php
// Database connection (change with your credentials)
$conn = mysqli_connect("localhost", "root", "", "testdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h2>MySQL String Functions Demo</h2>";

// Sample query to test string functions
$sql = "
SELECT 
    LENGTH('Hello World') AS LengthFunc,
    CONCAT('Hello',' ','PHP') AS ConcatFunc,
    CONCAT_WS('-', '2025','09','14') AS ConcatWSFunc,
    TRIM('   PHP   ') AS TrimFunc,
    RTRIM('PHP   ') AS RtrimFunc,
    LTRIM('   PHP') AS LtrimFunc,
    LPAD('123',5,'0') AS LpadFunc,
    RPAD('123',5,'0') AS RpadFunc,
    LOCATE('PHP','I love PHP programming') AS LocateFunc,
    SUBSTR('HelloWorld',1,5) AS SubstrFunc,
    LCASE('HELLO') AS LowerFunc,
    UCASE('hello') AS UpperFunc,
    REPEAT('Hi ',3) AS RepeatFunc,
    REPLACE('I like Java','Java','PHP') AS ReplaceFunc,
    STRSTR('HelloWorld','World') AS StrstrFunc
";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    foreach($row as $func => $value){
        echo "$func → $value <br>";
    }
}

mysqli_close($conn);
?>
