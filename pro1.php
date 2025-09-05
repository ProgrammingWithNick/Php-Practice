<?php
define("UNIVERSITY", "Marwadi University");

$studentName = "Nikhil Khavdu";
$enrollmentNo = "MU123456";
$semester = 1;

$sub1 = 78;
$sub2 = 85;
$sub3 = 69;
$sub4 = 90;
$sub5 = 74;

$totalMarks = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percentage = $totalMarks / 5;

echo "<h2>Previous Semester Result</h2>";
echo "<hr>";
echo "<b>University:</b> " . UNIVERSITY . "<br>";
echo "<b>Student Name:</b> $studentName <br>";
echo "<b>Enrollment No:</b> $enrollmentNo <br>";
echo "<b>Semester:</b> $semester <br><br>";

echo "<b>Marks:</b><br>";
echo "Subject 1: $sub1 <br>";
echo "Subject 2: $sub2 <br>";
echo "Subject 3: $sub3 <br>";
echo "Subject 4: $sub4 <br>";
echo "Subject 5: $sub5 <br><br>";

echo "<b>Total Marks:</b> $totalMarks <br>";
echo "<b>Percentage:</b> $percentage %<br>";

if($percentage >= 90){
    $grade = "A+";
} elseif($percentage >= 75){
    $grade = "A";
} elseif($percentage >= 60){
    $grade = "B";
} elseif($percentage >= 50){
    $grade = "C";
} else {
    $grade = "Fail";
}

echo "<b>Grade:</b> $grade <br>";
?>
