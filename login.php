<?php
session_start();

include("dbconfig.php");
// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $regno = $_POST['regno'];
    $password = $_POST['password'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT id, name, password_hash FROM students WHERE regno = ?");
    $stmt->bind_param("s", $regno);
    $stmt->execute();
    $stmt->bind_result($id, $name, $password_hash);
    $stmt->fetch();
    $stmt->close();

    // Verify the password
    if ($password_hash && password_verify($password, $password_hash)) {
        // Store user data in session
        $_SESSION['user_id'] = $id;
        $_SESSION['user_name'] = $name;
       
        // Redirect to a welcome page
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid register number or password.'); window.location.href = 'login_student.html';</script>";
        exit();
    }
}

$conn->close();
?>
