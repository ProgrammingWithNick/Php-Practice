<?php
define("Max_Mark", 100);

$name = "Nikhil";
$rno = "4063";

$Python = 80;
$Java = 60;
$Android = 70;
$Php = 82;

$tsub = 4;

$tmo = $Python + $Java + $Android + $Php;
$tmm = Max_Mark * $tsub;

$persentage = ($tmo / $tmm) * 100;

if ($persentage >= 98) {
    $grade = "A+";
} else if ($persentage >= 80) {
    $grade = "A";
} else if ($persentage >= 70) {
    $grade = "B";
} else if ($persentage >= 60) {
    $grade = "C";
} else {
    $grade = "F";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Student Result</h2>
<table>
    <tr>
        <th>Subject</th>
        <th>Marks Obtained</th>
        <th>Maximum Marks</th>
    </tr>
    <tr>
        <td>Python</td>
        <td><?php echo $Python; ?></td>
        <td><?php echo Max_Mark; ?></td>
    </tr>
    <tr>
        <td>Java</td>
        <td><?php echo $Java; ?></td>
        <td><?php echo Max_Mark; ?></td>
    </tr>
    <tr>
        <td>Android</td>
        <td><?php echo $Android; ?></td>
        <td><?php echo Max_Mark; ?></td>
    </tr>
    <tr>
        <td>PHP</td>
        <td><?php echo $Php; ?></td>
        <td><?php echo Max_Mark; ?></td>
    </tr>
    <tr>
        <th>Total</th>
        <th><?php echo $tmo; ?></th>
        <th><?php echo $tmm; ?></th>
    </tr>
    <tr>
        <th>Percentage</th>
        <td colspan="2"><?php echo round($persentage, 2) . "%"; ?></td>
    </tr>
    <tr>
        <th>Grade</th>
        <td colspan="2"><?php echo $grade; ?></td>
    </tr>
    <tr>
        <th>Student Name</th>
        <td colspan="2"><?php echo $name; ?></td>
    </tr>
    <tr>
        <th>Roll Number</th>
        <td colspan="2"><?php echo $rno; ?></td>
    </tr>
</table>

</body>
</html>
