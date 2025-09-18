<!-- 2.4
1 strlen() // any string
2 strpos() //find some specific word,letter
3 str_word_count()
4 strrev()
5 str_replace()
6 strtolower()
7 strtoupper() -->

<?php
echo "<h2>String Functions Demo</h2>";

$str = "Hello PHP World";

// 1. strlen()
echo "1. strlen → Length of string = " . strlen($str) . "<br><br>";

// 2. strpos()
echo "2. strpos → Position of 'PHP' = " . strpos($str, "PHP") . "<br><br>";

// 3. str_word_count()
echo "3. str_word_count → Total words = " . str_word_count($str) . "<br><br>";

// 4. strrev()
echo "4. strrev → Reverse string = " . strrev($str) . "<br><br>";

// 5. str_replace()
echo "5. str_replace → Replace 'World' with 'Universe' = " . str_replace("World", "Universe", $str) . "<br><br>";

// 6. strtolower()
echo "6. strtolower → " . strtolower($str) . "<br><br>";

// 7. strtoupper()
echo "7. strtoupper → " . strtoupper($str) . "<br>";
?>
