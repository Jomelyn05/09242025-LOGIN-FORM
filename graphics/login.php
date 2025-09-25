<?php
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

if(password_verify($password, $user["password"])) {
echo "login succesful! , Welcome". $user['fullname'];

    //redirect to dashboard

    header("Location: dashboard.php");
}
//redirect to dashboard..
else {
    echo "Wrong Password!";
}

    } else {
        //email doesnt exist
echo "NO USER WITH THAT EMAIL";
    }
}
?>
