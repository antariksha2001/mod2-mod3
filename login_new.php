<?php
// process.php

// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jan";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn){
    echo "success";
}
else{
    die("Error".mysqli_connect_error());
} 

// Perform a database operation
$sql = "SELECT * FROM login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data
    while ($row = $result->fetch_assoc()) {
        header("location: index.php");
    }
} else {
    echo "0 results";
}

// Close the connection when done
$conn->close();
?>
