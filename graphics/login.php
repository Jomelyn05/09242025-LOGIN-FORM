<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="widt=device-width, initial-scale=1.0">
        <link rel="icon" type="image/jpg" href="Icon.jpeg">
       <title>Song Lyrics Website</title>
    </head>

    <body>
        
        <div class="container">
        <div class="form">
        <form action="register.php" method="POST">

            <label for="email">Email</label>
            <input type="text" id="email" minlength="5" required> <br>
        
            <label for="fullname">Fullname</label>
            <input type="text" id="fulllname" minlength="5" required> <br>
        
            <label for="password">Password</label>
            <input type="password" id="password" minlength="6" required>
        
            <input type="Reset">
            <input type="Submit">
        </form>
        </div>
    </div>
    </body>
</html>