
<?php
  session_start();
 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Forget Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image: url('https://wallpapercrafter.com/th8008/1903465-abstract-backgrounds-night-blue-illuminated-light.jpg');
      background-size: cover;
      background-position: center;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      
    }

    .login-box {
      width: 300px;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      width: 92%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      border-style:inset;
           
      
    }

    .login-box input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .login-box input[type="submit"]:hover {
      background-color: #45a049;
    }

    .login-box .message {
      text-align: center;
      color: red;
      margin-top: 10px;
    }

    .login-box .signup-link {
      text-align: center;
      margin-top: 10px;
    }

    .login-box .signup-link a {
      color: #4caf50;
      text-decoration: none;
    }
  </style>
  <script>
    // Function to redirect to a URL after a specified time
    function redirectWithCountdown(url, seconds) {
      var countdownElement = document.getElementById("countdown");
      countdownElement.innerHTML = seconds;

      var countdownInterval = setInterval(function() {
        seconds--;
        countdownElement.innerHTML = seconds;
        
        if (seconds <= 0) {
          clearInterval(countdownInterval);
          window.location.href = url;
        }
      }, 1000);
    }
  </script>
</head>
<body>
  <div class="container">
    <div class="login-box">
      <h2 style="color: lightgreen;">
        <?php echo "Congratulation! " . $_SESSION['username'] . " your password has been successfully reset."; ?>
      </h2>
         <p style="color: blue; ">You will be redirected to the login page in <span id="countdown"></span> seconds.</p>
    </div>
  </div>

  <?php
    if (isset($_SESSION['username'])) {
      // Clear all session variables
      $_SESSION = array();
  
      // Destroy the session
      session_destroy();
      
      // Redirect to the login page after 5 seconds
      echo "<script>redirectWithCountdown('login.php', 5);</script>";
    } else {
      header("location: forget.php");
    }
  ?>
</body>
</html>


