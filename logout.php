  <?php
        session_start();

        // Check if the user is logged in
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin']=!true) {
           header("location:login.php");
        }
     ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="10">
    <title>Logout</title>
    <style>
        body {
            background: linear-gradient(to right, #ff0000, #00ff00, #0000ff);
            animation: gradient-animation 10s infinite;
        }
        
        @keyframes gradient-animation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: Arial, sans-serif;
        }

        h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        p {
            font-size: 20px;
        }

        a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Logout</h2>
        <?php
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['loggedin']) || $_SESSION['loggedin']=true) {
            // Clear all session variables
            $_SESSION = array();

            // Destroy the session
            session_destroy();

            echo "<p>You have been successfully logged out. Reload page to login</p>";
            header("location:index.php");
            
        } else {
            echo "<p>You are not logged in.</p>";
        }
        ?>
         <p><a href="index.php">home</a></p>
    </div>
</body>
</html>
