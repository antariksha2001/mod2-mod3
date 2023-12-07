<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Form</title>
    <link rel="stylesheet" href="scholarship_form_filter.css">
</head>
<body>
    <section class="container">
      <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $education = $_POST["education"];
    $percentage=$_POST["percentage"];
    $caste = $_POST["caste"];
    $area = $_POST["area"];
    $belongToMinorities = $_POST["belongToMinorities"];
    $bplCategory = $_POST["bplCategory"];
    $income = $_POST["income"];
    $physicallyChallenged = $_POST["physicallyChallenged"];

    // Print the retrieved data in a table
    echo "<div class='output-box'>";
    echo "<h3>Submitted Data:</h3>";
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Age</td><td>$age</td></tr>";
    echo "<tr><td>Gender</td><td>$gender</td></tr>";
    echo "<tr><td>Education</td><td>$education</td></tr>";
    echo "<tr><td>Percentage</td><td>$percentage</td></tr>";
    echo "<tr><td>Caste</td><td>$caste</td></tr>";
    echo "<tr><td>Area</td><td>$area</td></tr>";
    echo "<tr><td>Belong to Minorities</td><td>$belongToMinorities</td></tr>";
    echo "<tr><td>Belong to BPL Category</td><td>$bplCategory</td></tr>";
    echo "<tr><td>Family/Guardian Income</td><td>$income</td></tr>";
    echo "<tr><td>Physically Challenged</td><td>$physicallyChallenged</td></tr>";
    echo "</table>";
    echo "</div>";

    // Redirect based on education
    if ($education == "Post Graduation") {
        // Redirect to scholarship_pg_above_90.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_pg.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    } elseif ($education == "Graduation") {
        // Redirect to scholarship_ug_above_90.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_ug.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    } elseif ($education == "10th") {
        // Redirect to scholarship_hs_80_90.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_10.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    } elseif ($education == "12th") {
        // Redirect to scholarship_below_10.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_12.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    }elseif ($education == "Below 10th") {
        // Redirect to scholarship_below_10.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_below_10.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    }elseif ($education == "B.Tech") {
        // Redirect to scholarship_below_10.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_btech.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    }elseif ($education == "Diploma") {
        // Redirect to scholarship_below_10.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_diploma.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    }elseif ($education == "MBBS") {
        // Redirect to scholarship_below_10.php and pass the details via query parameters
        $url = "scholarship_form_filter/scholarship_mbbs.php";
        $url .= "?percentage=$percentage&age=$age&gender=$gender&education=$education&caste=$caste&area=$area&belongToMinorities=$belongToMinorities&bplCategory=$bplCategory&income=$income&physicallyChallenged=$physicallyChallenged";
        header("Location: $url");
        exit();
    }

    // If no matching conditions are found, redirect to a default page
    header("Location: scholarship_form_filter/scholarship_default.php");
    exit();
}
?>

    </section>
</body>
</html>
