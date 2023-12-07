

<?php

 

$con=mysqli_connect('localhost','root','','jan');
if(!$con){
    die("Failed to connect..".mysqli_connect_error());
}else{
   
if($_SERVER['REQUEST_METHOD']=='POST'){
    $e=$_POST['email'];
    $p=$_POST['password'];
    $query="select * from login where email ='$e' and password='$p'";
    $res=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($res))
    {
        
        echo"Login success";
        header("Location:index.php");
    }
    else
    {
        echo"Login failed";
        header("Location:login.php");
    }
    }

}
?>
