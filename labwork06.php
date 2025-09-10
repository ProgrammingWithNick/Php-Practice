<?php
// --- Practical 1: User Authentication Using Functions ---
function authenticateUser($username, $password) {
    $users = [
        'admin' => 'admin123',
        'user' => 'user123'
    ];
    return isset($users[$username]) && $users[$username] === $password;
}

// --- Practical 2: Event Countdown Using Date and Time Functions ---
function daysUntilEvent($eventDate) {
    $today = new DateTime();
    $event = new DateTime($eventDate);
    if ($event < $today) {
        return "The event has already passed.";
    }
    $diff = $today->diff($event);
    return $diff->days . " day(s) remaining until the event.";
}

// --- Practical 3: Survey Data Analysis Using Arrays and Functions ---
function calculateAverage($scores) {
    if (count($scores) === 0) return 0;
    return array_sum($scores) / count($scores);
}

// --- Practical 4: Plugin System with Function Existence Check ---
function pluginFunction() {
    return "Plugin function executed!";
}

// --- Practical 5: Resume Generator Using String Formatting ---
function generateResume($name, $email, $skills) {
    $skillsList = implode(", ", $skills);
    $resume = "Name: $name\nEmail: $email\nSkills: $skillsList";
    return nl2br(htmlspecialchars($resume));
}

// --- Practical 6: Academic Calendar Display ---
function displayDate() {
    return date("l, F j, Y");
}

// --- Practical 7: Grade Calculator Demonstrating Variable Scope ---
$finalGrade = '';

function calculateGrade($score) {
    global $finalGrade;
    if ($score >= 90) {
        $finalGrade = 'A';
    } elseif ($score >= 80) {
        $finalGrade = 'B';
    } elseif ($score >= 70) {
        $finalGrade = 'C';
    } else {
        $finalGrade = 'F';
    }
}

// --- Practical 8: Inventory Checker Using Arrays and Functions ---
$inventory = [
    "apple" => 10,
    "banana" => 5,
    "orange" => 0
];

function checkInventory($item, $inventory) {
    if (isset($inventory[$item])) {
        if ($inventory[$item] > 0) {
            return "There are " . $inventory[$item] . " $item(s) in stock.";
        } else {
            return "$item is out of stock.";
        }
    }
    return "$item is not found in inventory.";
}

// --- Practical 9: Date Difference Calculator ---
function dateDifference($date1, $date2) {
    $d1 = new DateTime($date1);
    $d2 = new DateTime($date2);
    $diff = $d1->diff($d2);
    return $diff->days . " day(s) difference.";
}

// --- Practical 10: Keyword Search in Research Abstracts ---
function searchKeyword($abstract, $keyword) {
    if (stripos($abstract, $keyword) !== false) {
        return "Keyword '$keyword' found in abstract.";
    }
    return "Keyword '$keyword' not found.";
}

// Handle form submissions and output variables for each practical
$message1 = $message2 = $message3 = $message4 = $message5 = $message6 = $message7 = $message8 = $message9 = $message10 = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Practical 1
    if (isset($_POST['p1_submit'])) {
        $u = $_POST['username'] ?? '';
        $p = $_POST['password'] ?? '';
        if ($u && $p) {
            $message1 = authenticateUser($u, $p) ? "Login successful. Welcome, $u!" : "Invalid username or password.";
        } else {
            $message1 = "Please enter username and password.";
        }
    }

    // Practical 2
    if (isset($_POST['p2_submit'])) {
        $eventDate = $_POST['event_date'] ?? '';
        if ($eventDate) {
            $message2 = daysUntilEvent($eventDate);
        } else {
            $message2 = "Please enter the event date.";
        }
    }

    // Practical 3
    if (isset($_POST['p3_submit'])) {
        $scoresRaw = $_POST['scores'] ?? '';
        $scoresArray = array_filter(array_map('trim', explode(',', $scoresRaw)), 'is_numeric');
        $message3 = "Average survey score: " . number_format(calculateAverage($scoresArray), 2);
    }

    // Practical 4
    if (isset($_POST['p4_submit'])) {
        $message4 = function_exists('pluginFunction') ? pluginFunction() : "Plugin function does not exist.";
    }

    // Practical 5
    if (isset($_POST['p5_submit'])) {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $skillsRaw = $_POST['skills'] ?? '';
        $skills = array_filter(array_map('trim', explode(',', $skillsRaw)));
        if ($name && $email) {
            $message5 = generateResume($name, $email, $skills);
        } else {
            $message5 = "Please enter name and email.";
        }
    }

    // Practical 6
    if (isset($_POST['p6_submit'])) {
        $message6 = "Today's date is: " . displayDate();
    }

    // Practical 7
    if (isset($_POST['p7_submit'])) {
        $score = isset($_POST['score']) ? (int)$_POST['score'] : -1;
        if ($score >= 0 && $score <= 100) {
            calculateGrade($score);
            global $finalGrade;
            $message7 = "Final Grade: $finalGrade";
        } else {
            $message7 = "Please enter a valid score between 0 and 100.";
        }
    }

    // Practical 8
    if (isset($_POST['p8_submit'])) {
        $item = strtolower(trim($_POST['item'] ?? ''));
        $message8 = checkInventory($item, $inventory);
    }

    // Practical 9
    if (isset($_POST['p9_submit'])) {
        $date1 = $_POST['date1'] ?? '';
        $date2 = $_POST['date2'] ?? '';
        if ($date1 && $date2) {
            $message9 = dateDifference($date1, $date2);
        } else {
            $message9 = "Please enter both dates.";
        }
    }

    // Practical 10
    if (isset($_POST['p10_submit'])) {
        $abstract = $_POST['abstract'] ?? '';
        $keyword = $_POST['keyword'] ?? '';
        if ($abstract && $keyword) {
            $message10 = searchKeyword($abstract, $keyword);
        } else {
            $message10 = "Please enter both abstract and keyword.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>MCA Unit-2 Practicals</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        section { border: 1px solid #ccc; padding: 15px; margin-bottom: 20px; border-radius: 8px; }
        h2 { margin-top: 0; }
        label { display: block; margin: 6px 0 3px; }
        input[type=text], input[type=password], input[type=number], textarea { width: 100%; padding: 6px; margin-bottom: 10px; }
        input[type=submit] { padding: 8px 15px; }
        .message { margin-top: 10px; color: #006600; font-weight: bold; }
    </style>
</head>
<body>

<h1>MCA Unit-2 Practical Exercises</h1>

<!-- Practical 1 -->
<section>
    <h2>1. User Authentication Using Functions</h2>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required />
        <label>Password:</label>
        <input type="password" name="password" required />
        <input type="submit" name="p1_submit" value="Login" />
    </form>
    <div class="message"><?= htmlspecialchars($message1) ?></div>
</section>

<!-- Practical 2 -->
<section>
    <h2>2. Event Countdown Using Date and Time Functions</h2>
    <form method="post">
        <label>Event Date (YYYY-MM-DD):</label>
        <input type="text" name="event_date" placeholder="2025-12-31" required />
        <input type="submit" name="p2_submit" value="Calculate Days" />
    </form>
    <div class="message"><?= htmlspecialchars($message2) ?></div>
</section>

<!-- Practical 3 -->
<section>
    <h2>3. Survey Data Analysis Using Arrays and Functions</h2>
    <form method="post">
        <label>Enter survey scores separated by commas:</label>
        <input type="text" name="scores" placeholder="5,4,3,4,5" required />
        <input type="submit" name="p3_submit" value="Calculate Average" />
    </form>
    <div class="message"><?= htmlspecialchars($message3) ?></div>
</section>

<!-- Practical 4 -->
<section>
    <h2>4. Plugin System with Function Existence Check</h2>
    <form method="post">
        <input type="submit" name="p4_submit" value="Run Plugin Function" />
    </form>
    <div class="message"><?= htmlspecialchars($message4) ?></div>
</section>

<!-- Practical 5 -->
<section>
    <h2>5. Resume Generator Using String Formatting</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required />
        <label>Email:</label>
        <input type="text" name="email" required />
        <label>Skills (comma separated):</label>
        <input type="text" name="skills" placeholder="PHP, JavaScript, HTML" />
        <input type="submit" name="p5_submit" value="Generate Resume" />
    </form>
    <div class="message"><?= $message5 ?></div>
</section>

<!-- Practical 6 -->
<section>
    <h2>6. Academic Calendar Display</h2>
    <form method="post">
        <input type="submit" name="p6_submit" value="Show Today's Date" />
    </form>
    <div class="message"><?= htmlspecialchars($message6) ?></div>
</section>

<!-- Practical 7 -->
<section>
    <h2>7. Grade Calculator Demonstrating Variable Scope</h2>
    <form method="post">
        <label>Enter Score (0-100):</label>
        <input type="number" name="score" min="0" max="100" required />
        <input type="submit" name="p7_submit" value="Calculate Grade" />
    </form>
    <div class="message"><?= htmlspecialchars($message7) ?></div>
</section>

<!-- Practical 8 -->
<section>
    <h2>8. Inventory Checker Using Arrays and Functions</h2>
    <form method="post">
        <label>Enter item name:</label>
        <input type="text" name="item" placeholder="apple" required />
        <input type="submit" name="p8_submit" value="Check Inventory" />
    </form>
    <div class="message"><?= htmlspecialchars($message8) ?></div>
</section>

<!-- Practical 9 -->
<section>
    <h2>9. Date Difference Calculator</h2>
    <form method="post">
        <label>Enter first date (YYYY-MM-DD):</label>
        <input type="text" name="date1" placeholder="2025-01-01" required />
        <label>Enter second date (YYYY-MM-DD):</label>
        <input type="text" name="date2" placeholder="2025-12-31" required />
        <input type="submit" name="p9_submit" value="Calculate Difference" />
    </form>
    <div class="message"><?= htmlspecialchars($message9) ?></div>
</section>

<!-- Practical 10 -->
<section>
    <h2>10. Keyword Search in Research Abstracts</h2>
    <form method="post">
        <label>Enter Research Abstract:</label>
        <textarea name="abstract" rows="4" required></textarea>
        <label>Enter Keyword to Search:</label>
        <input type="text" name="keyword" required />
        <input type="submit" name="p10_submit" value="Search Keyword" />
    </form>
    <div class="message"><?= htmlspecialchars($message10) ?></div>
</section>

</body>
</html>
