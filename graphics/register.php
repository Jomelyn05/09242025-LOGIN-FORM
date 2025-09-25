<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and escape form data
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email already has an account.";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // CORRECT SQL SYNTAX – NO QUOTES AROUND COLUMN NAMES
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            
            echo "<script> alert('Account Created!!!') window.location.href = 'index.php';
                  </script> ";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
