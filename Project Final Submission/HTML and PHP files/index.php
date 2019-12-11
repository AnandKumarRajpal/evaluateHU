<?php
session_start();

$con = mysqli_connect("localhost", "root", "");
if(!$con)
{
	echo "Unable to establish connection.".mysqli_error();
}
$db = mysqli_select_db($con, "test");
if(!$db)
{
	echo"Database not found! ".mysqli_error();
}

if(isset($_POST['submit']))
{
	$type = $_POST['type'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	if($type == 'student')
	{
		$query = "select * from students where email='$email' and password = '$password'";
	} 
	elseif($type == 'instructor')
	{
		$query = "select * from instructors where email='$email' and password = '$password'";
	}
	elseif($email == "admin@habib.edu.pk" && $password == "password" && $type == 'admin')
	{
		header("Location: ro_access/ro_access/index.html");
	}
	
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
	
	while($row = mysqli_fetch_array($result))
	{
		if($row['Email'] == $email && $row['Password'] == $password && $type == 'student')
		{
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['id'] = $row['Studentid'];
			header("Location: student.php");
		}
		elseif($row['Email'] == $email && $row['Password'] == $password && $type == 'instructor')
		{
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['Name'] = $row['Name'];
			header("Location: resInstructor.php");
		}
		
	}
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body><div class="login-dark">
	
    <form method="post">
        <h2 class="sr-only">Login Form</h2>
		<img src="assets/img/logoback.png" height=80, width=240/>
        <img class="profile-img-card" src="assets/img/check2.png" />
        <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" /></div>
        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
        <div>
			<select class="form-control" name="type" placeholder="User Role" >
			<option value="" disabled selected hidden>Select user type</option>
			<option value="instructor">Instructor</option>
			<option value="student">Student</option>
			<option value="admin">Admin</option>
            </select>
		</div>
        <div class="form-group"><button name="submit" class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>




