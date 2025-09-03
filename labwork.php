<?php
// =========================
// Lab 1: User Input Sanitization for Web Forms
// =========================
if (isset($_POST['lab1'])) {
    $name = trim($_POST['name']);
    $email = strtolower(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    echo "<h3>Lab 1 Output:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Message: $message <br><hr>";
}

// =========================
// Lab 2: Secure Token Generation for Password Reset
// =========================
if (isset($_POST['lab2'])) {
    $email = trim($_POST['email']);
    $token = md5($email . time());

    echo "<h3>Lab 2 Output:</h3>";
    echo "Password Reset Token: $token <br>";
    echo "This token is used in password reset URLs.<hr>";
}

// =========================
// Lab 3: Name Formatting for Certificates
// =========================
if (isset($_POST['lab3'])) {
    $fullName = trim($_POST['fullname']);
    $words = explode(" ", strtolower($fullName));
    $formattedWords = array_map('ucfirst', $words);
    $formattedName = implode(" ", $formattedWords);

    echo "<h3>Lab 3 Output:</h3>";
    echo "Formatted Name: $formattedName <hr>";
}

// =========================
// Lab 4: CSV Parsing for Batch Evaluation
// =========================
if (isset($_POST['lab4'])) {
    $students = [
        "Hardik,85,90,78",
        "Nikhil,88,92,80",
        "Priya,70,75,85"
    ];

    echo "<h3>Lab 4 Output:</h3>";
    foreach ($students as $student) {
        $data = explode(",", $student);
        $name = $data[0];
        $scores = array_slice($data, 1);
        $average = array_sum($scores) / count($scores);
        $summary = implode(" - ", [$name, "Avg: " . round($average, 2)]);
        echo $summary . "<br>";
    }
    echo "<hr>";
}

// =========================
// Lab 5: Comment Moderation System
// =========================
if (isset($_POST['lab5'])) {
    $bannedWords = ["spam", "hack", "scam"];
    $comment = htmlspecialchars(strtolower(trim($_POST['comment'])));

    echo "<h3>Lab 5 Output:</h3>";
    echo "User Comment: $comment <br>";

    foreach ($bannedWords as $word) {
        if (strpos($comment, $word) !== false) {
            echo " Comment flagged for containing banned word: $word<hr>";
            exit;
        }
    }

    echo " Comment approved.<hr>";
}
?>
