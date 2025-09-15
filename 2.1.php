<!-- 2.1 Write a PHP code to create numeric array for Monday to Saturday, associative array
for month with total days of month such as January=>30,February=>28 upto
December and multidimensional array for laptop along with company name inside that
model and price(any two companies). -->


<?php
// Numeric array for Monday to Saturday
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Days of the Week:</h3>";
foreach ($days as $day) {
    echo $day . "<br>";
}

// Associative array for Months with total days
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>Months with Days:</h3>";
foreach ($months as $month => $days) {
    echo "$month : $days days<br>";
}

// Multidimensional array for Laptop company, model and price
$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 45000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 50000
    )
);

echo "<h3>Laptop Details:</h3>";
foreach ($laptops as $company => $info) {
    echo "Company: $company, Model: " . $info["Model"] . ", Price: ₹" . $info["Price"] . "<br>";
}
?>
