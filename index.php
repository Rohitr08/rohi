<?php
$insert=false;
if (isset($_POST['name'])) {
    

$server = "localhost";

$username = "root";

$password = "";

$con = mysqli_connect($server , $username , $password);

if (!$con) {
    die("connection with db is failed due to".mysqli_connect_error());
}


$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];

$sql = " INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone ', '$desc', current_timestamp());";
// echo $sql;

if($con->query($sql)==true) {
    $insert=true;
    // echo"successfully inserted";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="rajgir.jpg" alt="Rajgir temple">
    <div class="conatiner">
        <h1>Welcome to Rajgir, Trip Form</h1>
        <p>Enter your details & Submit this form to confirm your paticipation for the trip. </p>
        <?php
         if($insert==true){
        echo "<p class='subpara'>Thanks for submitting your form. we are happy to see you joining us for the rajgir trip.</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" placeholder="Enter your name" id="name">
            <input type="text" name="age" placeholder="Enter your age" id="age">
            <input type="text" name="gender" placeholder="Enter your gender" id="gender">
            <input type="email" name="email" placeholder="Enter your email" id="email">
            <input type="phone" name="phone" placeholder="Enter your phone No" id="phone">
            <textarea id="desc" name="desc" cols="21" rows="7" placeholder="Enter any informations here"></textarea>

            <button class="btn">Submit</button>

        </form>


    </div>

    <script src="index.js"></script>



</body>

</html>