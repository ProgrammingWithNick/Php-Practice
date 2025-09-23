<!-- 2.8 Write a PHP code to use mysql date and time functions as given bellow:
DAYOFWEEK(),WEEKDAY(),DAYOFMONTH(),DAYOFYEAR(),DAYNAME(),MONTH(),MONT
HNAME(),WEEK(),NOW(),SYSDATE(),CURRENT_TIMESTAMP() -->

<?php
// Database connection (change credentials as needed)
$conn = mysqli_connect("localhost", "root", "", "testdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<h2>MySQL Date & Time Functions Demo (Part 1)</h2>";

$sql = "
SELECT 
    DAYOFWEEK('2025-09-14') AS DayOfWeek,
    WEEKDAY('2025-09-14') AS Weekday,
    DAYOFMONTH('2025-09-14') AS DayOfMonth,
    DAYOFYEAR('2025-09-14') AS DayOfYear,
    DAYNAME('2025-09-14') AS DayName,
    MONTH('2025-09-14') AS MonthNum,
    MONTHNAME('2025-09-14') AS MonthName,
    WEEK('2025-09-14') AS WeekNum,
    NOW() AS NowFunc,
    SYSDATE() AS SysDateFunc,
    CURRENT_TIMESTAMP() AS CurrentTimestamp
";

$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    foreach($row as $func => $value){
        echo "$func → $value <br>";
    }
}
mysqli_close($conn);
?>
