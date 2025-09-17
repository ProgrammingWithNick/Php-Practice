<!-- 2.3Write a program to perform following array functions:
1 array_change_key_case($var, CASE_LOWER/CASE_UPPER).
2 array_chunk($var,size) //array of months
3 array_count_values()
4 array_combine()
5 array_pop()
6 array_push()
7 array_unshift()
8 array_shift(). -->

<?php
echo "<h2>Array Functions Demo</h2>";

// 1. array_change_key_case
$assoc = array("One"=>1, "Two"=>2, "Three"=>3);
$upper = array_change_key_case($assoc, CASE_UPPER);
echo "1. array_change_key_case → ";
foreach($upper as $k=>$v){ echo "$k=$v "; }
echo "<br><br>";

// 2. array_chunk
$months = array("January", "February", "March", "April", "May", "June");
$chunks = array_chunk($months, 2);
echo "2. array_chunk (groups of 2):<br>";
foreach($chunks as $chunk){
    echo implode(", ", $chunk) . "<br>";
}
echo "<br>";

// 3. array_count_values
$colors = array("red","blue","red","green","blue","red");
$cnt = array_count_values($colors);
echo "3. array_count_values:<br>";
foreach($cnt as $color=>$count){
    echo "$color appears $count times<br>";
}
echo "<br>";

// 4. array_combine
$keys = array("a","b","c");
$values = array("Apple","Banana","Cherry");
$combined = array_combine($keys, $values);
echo "4. array_combine:<br>";
foreach($combined as $k=>$v){
    echo "$k → $v<br>";
}
echo "<br>";

// 5. array_pop
$nums = [1,2,3,4];
$last = array_pop($nums);
echo "5. array_pop → Removed $last, Remaining: " . implode(", ", $nums) . "<br><br>";

// 6. array_push
array_push($nums, 5,6);
echo "6. array_push → After adding 5,6: " . implode(", ", $nums) . "<br><br>";

// 7. array_unshift
array_unshift($nums, 0);
echo "7. array_unshift → After adding 0 at start: " . implode(", ", $nums) . "<br><br>";

// 8. array_shift
$first = array_shift($nums);
echo "8. array_shift → Removed $first, Remaining: " . implode(", ", $nums) . "<br>";
?>
