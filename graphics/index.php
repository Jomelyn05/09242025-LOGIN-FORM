<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <div class="form">
            <form action="register.php" method="POST">

                <label for="fullname">Full Name:</label>
                <input type="text" name="fullname" required><br>

                <label for="email">Email:</label>
                <input type="email" name="email" required><br>

                <label for="password">Password:</label>
                <input type="password" name="password" required><br>

                <input type="reset">
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</body>
</html>
