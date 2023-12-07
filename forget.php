<?php
$con = mysqli_connect('localhost', 'root', '', 'jan');
$status = "";

if ($con) {
    $err = "";
    $notFound = "";

    if ($_SERVER["REQUEST_METHOD"] =="POST") {
        $username = $_POST["email"];
        $retypeNewPassword = $_POST["re_new_password"];
        $newPassword = $_POST["new_password"];
        
        $query = "SELECT COUNT(*) as count FROM login WHERE email = '$username'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $userCount = $row['count'];

        if ($userCount > 0) {
            if ($retypeNewPassword == $newPassword) {
                $query = "UPDATE login SET password = '$newPassword' WHERE email = '$username'";
                $result = mysqli_query($con, $query);
                
                if ($result) {
                    session_start();
                    $_SESSION['username'] = $username;
                      $_SESSION['success'] = true;
                     $status = "Password reset successful";
                         header("location: reset_success.php");
                  
                } else {
                    $status = "Password reset failed";
                }
            } else {
                $err = "Confirm password must be the same";
            }
        } else {
            $notFound = "User not found";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Forget Password</title>
  <style>
         body {
      font-family: Arial, sans-serif;
      background-image: url('https://images.pexels.com/photos/2325447/pexels-photo-2325447.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
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
      background-color: rgba(24, 23, 23, 0.232);
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
</head>
<body>
  <div class="container">
    <div class="login-box">
       <h2 style="background: red;"><?php echo $err; ?><?php echo $notFound; ?></h2>
      <h2>Forget Password</h2>
      <form action="forget.php" method="post">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="new_password" placeholder="New password" required>
        <input type="password" name="re_new_password" placeholder="Re-type new password" required>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</body>
</html>
