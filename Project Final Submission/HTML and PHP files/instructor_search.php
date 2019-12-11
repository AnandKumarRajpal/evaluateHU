<?php
//creating variables

    $server="localhost";
    $user="root";
    $pass="";
    $db="test";

    //declaring connection
    $conn = new mysqli($server,$user,$pass,$db);
    //$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

    //Checking connection
    if($conn->connect_error){
        die('Could not connect: '. $conn->connect_error);
    }
    //$name = $_POST['Name'];
    //echo $name;
    if(isset($_POST['a']))
    {
        echo "asdasd";
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>evaluate-HU</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/Profile-Picture-With-Badge-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Picture-With-Badge.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-Boxed.css">
</head>

<body>

        <h1><center>Instructor Search</center></h1>
	
	<!-- search form 1 -->
    <form class="searchbox_1" method ="post">
    <input type="search" class="search_1" name="Name" placeholder="Search" size="150"/>
    <button name="a" class="btn btn-primary btn-block" type="submit">Search</button>
    </form>
	
</body>

</html>