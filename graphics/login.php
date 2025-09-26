<?php
session_start();
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and escape form data
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // FETCH DATABASE
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    //CHECK IF PASSWORD IS CORRECT;

if (password_verify($password, $user["password"])) {
            $_SESSION['user'] = $user['email'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Wrong Password!";
        }
    } else {
        echo "No user with that email";
    }
}
?>
