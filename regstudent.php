<?php
include("dbconfig.php");


// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $regno = $_POST['regno'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    // Check if passwords match
    if ($password !== $repassword) {
        echo "<script>alert('Passwords do not match.'); window.location.href = 'index.php';</script>";
        exit();
    }

    // Check if registration number already exists
    $stmt = $conn->prepare("SELECT COUNT(*) FROM students WHERE regno = ?");
    $stmt->bind_param("s", $regno);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if ($count > 0) {
        echo "<script>alert('Registration number already exists.'); window.location.href = 'index.php';</script>";
        exit();
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_BCRYPT);


    // Insert student information into the database
    $stmt = $conn->prepare("INSERT INTO students (regno, name, password_hash) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $regno, $name, $password_hash);
    $stmt->execute();
    $stmt->close();

    echo "<script>alert('Registration successful!'); window.location.href = 'login_student.html';</script>";
    exit();
}

$conn->close();
?>
