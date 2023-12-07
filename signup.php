<?php

// Create connection
$conn=mysqli_connect('localhost','root','','jan');

// Check connection
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}else{
    // Get data from POST request
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $nm=$_POST['name'];
    $el=$_POST['email'];
    $ph=$_POST['phone'];
    $gr=$_POST['gender'];
    $ag=$_POST['age']; 
    // $psw=$_POST['password'];
    $cp=$_POST['confirm'];


// Insert data into database
$sql = "INSERT INTO `login` (name,email,phone,gender,age,password) VALUES ('$nm','$el','$ph','$gr',$ag,'$cp')";
$result=mysqli_query($conn,$sql);
        if (!$result){
            die("Failed to connect".mysqli_connect_error());
        }
        else
        {
          
          header("location:login.php");
           
        }
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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
            width: 300px;
            margin:auto;
            padding: 20px;
            border: 1px solid #ccc;
            align-items:center;
            justify-content:center;
            border-style:inset;
            border-radius:10px;
            background-color: rgba(24, 23, 23, 0.232);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border:solid white 1px;
            border-style:inset;
            border-radius:10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border:solid white 1px;
            border-style:inset;
            border-radius:10px;
        }
        
       
    </style>
</head>

<body>
     <div class="container">
        <form action="signup.php" method="POST">
            <h1>Signup</h1>
         
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Nname" name="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="gender"><b>Gender</b></label>
            <input type="text" placeholder="Enter Gender" name="gender" required>

            <label for="age"><b>Age</b></label>
            <input type="text" placeholder="Enter Age" name="age" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit">Signup</button>
        </form>
    </div>
 </body>

</html>