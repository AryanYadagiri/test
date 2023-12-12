<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if (!$con) {
        die("Connection failed to the database" . mysqli_connect_error());
    }
    // echo "Successfully connected to database.";

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', 
    '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    // echo $sql;

    if ($con->query($sql)) {
        //echo "Successsfully connected";
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="bg.jpg" alt="Background image">
    <div class="container">
        <!--
        <h1>Welcome to college trip form</h1> -->
        <!--
        <p>Enter your details to confirm your participation in trip.</p> -->

        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submitting the trip form.</p>";
        }
        ?>
        <!--
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>           
        </form> -->
    </div>
    <!-- <script src="index.js"></script>     -->
</body>

</html>