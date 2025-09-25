<!-- 2.9 Write a PHP code to use mysql date and time functions as given bellow:
HOUR(),MINUTE(),SECOND(),DATE_FORMAT(),DATE_SUB(),DATE_ADD(),CURDATE()/C
URRENT_DATE,CURTIME()/CURRENT_TIME(),UNIX_TIMESTAMP(), FROM_UNIXTIME(). -->

<?php
// Database connection (change credentials as needed)
$conn = mysqli_connect("localhost", "root", "", "testdb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<h2>MySQL Date & Time Functions Demo (Part 2)</h2>";
$sql = "
SELECT 
    HOUR('2025-09-14 15:45:30') AS HourFunc,
    MINUTE('2025-09-14 15:45:30') AS MinuteFunc,
    SECOND('2025-09-14 15:45:30') AS SecondFunc,
    DATE_FORMAT('2025-09-14 15:45:30', '%d-%M-%Y %H:%i:%s') AS DateFormatFunc,
    DATE_SUB('2025-09-14', INTERVAL 10 DAY) AS DateSubFunc,
    DATE_ADD('2025-09-14', INTERVAL 10 DAY) AS DateAddFunc,
    CURDATE() AS CurDateFunc,
    CURRENT_DATE() AS CurrentDateFunc,
    CURTIME() AS CurTimeFunc,
    CURRENT_TIME() AS CurrentTimeFunc,
    UNIX_TIMESTAMP('2025-09-14 15:45:30') AS UnixTimeFunc,
    FROM_UNIXTIME(1757851530) AS FromUnixTimeFunc
";

$result = mysqli_query($conn, $sql);
if ($row = mysqli_fetch_assoc($result)) {
    foreach($row as $func => $value){
        echo "$func → $value <br>";
    }
}
mysqli_close($conn);
?>
