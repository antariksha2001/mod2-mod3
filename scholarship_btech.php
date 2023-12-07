<?php
// Retrieve the details from query parameters
$age = $_GET["age"];
$gender = $_GET["gender"];
$education = $_GET["education"];
$percentage = $_GET["percentage"];
$caste = $_GET["caste"];
$area = $_GET["area"];
$belongToMinorities = $_GET["belongToMinorities"];
$bplCategory = $_GET["bplCategory"];
$income = $_GET["income"];
$physicallyChallenged = $_GET["physicallyChallenged"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship - B.Tech </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Scholarship -  B.Tech </h1>
    </header>
    <section>
        <h2>Congratulations! You are eligible for the B.Tech  Scholarship.</h2>
        <!-- Add scholarship details and information here -->
            <div class="output-box">
        <table border="1" cellspacing="10">
            <tr>
                <th colspan="2"> <h3>Submitted Data:</h3></th>
            <tr>
                <th>Info</th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Age</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td>Education</td>
                <td><?php echo $education; ?></td>
            </tr>
            <tr>
                <td>Percentage</td>
                <td><?php echo $percentage; ?></td>
            </tr>
            <tr>
                <td>Caste</td>
                <td><?php echo $caste; ?></td>
            </tr>
            <tr>
                <td>Area</td>
                <td><?php echo $area; ?></td>
            </tr>
            <tr>
                <td>Belong to Minorities</td>
                <td><?php echo $belongToMinorities; ?></td>
            </tr>
            <tr>
                <td>Belong to BPL Category</td>
                <td><?php echo $bplCategory; ?></td>
            </tr>
            <tr>
                <td>Family/Guardian Income</td>
                <td><?php echo $income; ?></td>
            </tr>
            <tr>
                <td>Physically Challenged</td>
                <td><?php echo $physicallyChallenged; ?></td>
            </tr>
        </table>
    </div>
    </section>
      <hr>
    <section id="instructions">
         
         <?php include "instructions/btech.php";?>
  
    </section>
    <hr>
    <footer>
        <!-- Add footer content here -->
    </footer>
</body>
</html>
