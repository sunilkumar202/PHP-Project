<?php
if(isset($_POST['name'])){
    //set connection variables
    $server="localhost";
    $username="root";
    $password="";

    //create a db connection
    $con=mysqli_connect($server,$username,$password);
    //check for connection success
    if(!$con){
        die("connection to this database failed due to" .mysqli_connect_error());
    }
    echo "Success connecting to DB";
    //collect post data
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql="INSERT INTO `travel_agency`.`trip` (`Serial no.`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('01', '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    echo $sql;
    //execute query
    if($con->query($sql)==true){
        echo "Successfully submitted bro...";
    }
    else{
        echo "error: $sql <br> $con->error";
    }
    //close the db connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel agency</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--<img class="img" src="2.jpg" alt="goa">-->
    <div class="container">
        <h1>Welcome to Sunil's Travel agency</h1>
        <p>Enter ur details correctly so that we may help you...</p>
        <p class="Thank">Thank you for visiting our site...</p>
        <form action="index.php" method="post">
            Name: <input type="text" name="name" id="name" placeholder="Enter your name:" required="">
            Age: <input type="text" name="age" id="age" placeholder="Enter your age:">
            Gender: <input type="gender" name="gender" id="gender" placeholder="Enter your gender:">
            Email: <input type="email" name="email" id="email" placeholder="Enter your email id:">
            Phone: <input type="phone" name="phone" id="phone" placeholder="Enter your phone number:">
            Enter any other informations:<textarea name="desc" id="desc" cols="35" rows="10" placeholder="Enter other details" style="height: 117px; width: 100%; resize:none"></textarea>
            <button class="btn">Submit</button>
            <button class="btn">Reset</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>

