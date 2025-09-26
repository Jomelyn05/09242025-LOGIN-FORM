<?php
session_start();
include("connect.php");

//if user is not logged in


if(!isset($_SESSION['user'])) {
    header("Location:index.php");
}

//fetch the loggedin user details

$email = $_SESSION['user'];  //user email

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

$name = $user["fullname"];

$conn->close();
?>


    <!DOCTYPE html>
    
    <html lang="en">
    
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
   
    <body class=
                "bg-[url('https://cdn.pixabay.com/photo/2016/04/02/09/43/apple-1302430_1280.jpg')]  bg-cover bg-center h-screen w-full bg-no-repeat flex items-center justify-center">
        
        <div class="dashboard-container max-w- [960px] bg-green-100/80 h-125 w-200 grid gap-5 p-13 rounded-2xl mt-15 relative">
                <h2 class="absolute top-8 left-3  text-2xl text-black">Welcome,
                <span id="username">           
            <?php
            echo htmlspecialchars($name);
            ?>
                </span></h2>

            <div class="absolute top-8 right-15 bg-green-100 rounded-2xl px-2 py-1">
                <a href="logout.php">
                    <button id="logout" class="btn-logout-btn">Logout</button></a>
            </div> 

            <div class="relative">
                <img src=
                        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_0lRR9HR5PGQICB-A9BUE_Mk7bA_695yb0A&s" class="absolute top-15 ml-48">            
                <h3 class="text-gray-600 text-lg absolute top-70">Your Profile</h3>
                <p class="absolute top-80"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                <p class="absolute top-90"><strong>Member Since:</strong> <?php echo date('F j Y', strtotime($user['created_at'])); ?></p>
            </div>
        </div>
    </body>
    </html>