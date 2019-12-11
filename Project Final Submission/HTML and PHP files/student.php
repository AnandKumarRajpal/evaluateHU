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

$email = $_SESSION['email'];
$password = $_SESSION['password'];

$query = "select * from students where email='$email' and password = '$password'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$id = $row['Studentid'];
$_SESSION['id'];

if(isset($_POST['review_course']))
{
	$course = $_POST['cou'];
	$_SESSION['review'] = $course;
	header("Location: course_review.php");
}

if(isset($_POST['review_instructor']))
{
	$instructor = $_POST['ins'];
	$_SESSION['review'] = $instructor;
	header("Location: instructor_review.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="assets/css/LinkedIn-like-Profile-Box.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>
<style>
    .my-row{
        height: 130px;
        padding-bottom: 35px;
        padding-right: 0px;
        padding-left: 0px ;
    }
    .my-col{
        padding-top: 50px;
        padding-left: 700px;
    }
    .my-card1{
        width:fit-content;
        height:310px;
    }
    .my-row3{
        padding-top:10px;
    }
    .my-row2{
        padding-top:10px;
    }
    .my-row1{
        padding-top:10px;
    }
</style>



<body>
	<div>
    <nav class="navbar navbar-expand-md navbar-light bg-light my-row">
        <a class="navbar-brand" href="#">
        <img src="https://donate.habib.edu.pk/Content/hu_logo.png" alt="">
        </a>
        <span class="navbar-text">
        <div class="collapse navbar-collapse my-col" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a href="" class="nav-link">Profile</a>
                </li>
                <li class="nav-item active">
                <a href="course_search.html" class="nav-link">Course Search</a>
                </li>
                <li class="nav-item active">
                <a href="instructor_search.html" class="nav-link">Instructor Search</a>
                </li>
            </ul>
        </div>
        </span>

    </nav>
    </div>
    <br>
<center>
    <div class="container profile profile-view" id="profile">
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
	    <div class="form-row profile-row"><div class="col-md-4 relative">
		<div class="avatar"></div>
		<div class="text-center border rounded-0 shadow-sm profile-box" style="width: 350px;height: 330px;background-color: #ffffff;margin: 5px;">
        <div style="height: 50px;background-image: url('assets/img/bg-pattern.png');background-color: rgba(54,162,177,0);"></div>
        <div>
		<center><img class="rounded-circle" src="assets/img/<?php echo$row['Profile'] ?>.jpg" width="100px" height="100px" style="background-color: rgb(255,255,255);padding: 2px;" /></center>
		</div>
        <div style="height: 80px;">
            <center>
			<h2><?php echo$row['Name']?></h2>
            <p style="font-size: 30px;">
			Major: <?php echo$row['Major'] ?><br>
			Minor: <?php echo$row['Minor'] ?><br>
			ID: <?php echo$row['Studentid'] ?><br>
			</p>
			</center>
        </div>
    </div>
</div>
<div class="col-md-8">
        <div class="col-md-8">
		<?php 
			$query = "select Courses.Title from Courses, CourseReviews, Students where Students.Studentid = CourseReviews.Student_ID and Courses.Courseid = CourseReviews.Course_ID and CourseReviews.Checked = 0 and Students.studentid = $id";
			$result = mysqli_query($con, $query) or die(mysqli_error($con));
		?>
		<hr>
		<h3>Courses To be Reviewed:</h3>
		<form method="post">
				<select name="cou" class="form-control" name="course">
				<?php while($row = mysqli_fetch_array($result))
				{ ?>	
				<option value="<?php echo$row['Title'];?>"><?php echo$row['Title']; ?></option>
				<?php }	?>
				</select>
				<div class="form-group">
				<button name="review_course" class="btn btn-primary btn-block" type="submit">Review</button>
				</div>
		</form>
	</div>	
	<div class="col-md-8">
		<?php
			$query = "select instructors.Name from instructors, instructor_reviews, Students where Students.Studentid = instructor_reviews.Student_ID and instructors.Instructorid = instructor_reviews.Instructor_ID and instructor_reviews.Checked = 0 and Students.studentid = $id";
			$result = mysqli_query($con, $query) or die(mysqli_error($con));
		?>
		<hr>
		<h3>Instructors To be Reviewed:</h3>
		<form method="post">
				<select name="ins" class="form-control" name="course">
				<?php while($row = mysqli_fetch_array($result))
				{ ?>	
				<option value="<?php echo$row['Name'];?>"><?php echo$row['Name']; ?></option>
				<?php }	?>
				</select>
				<div class="form-group">
				<button name="review_instructor" class="btn btn-primary btn-block" type="submit">Review</button>
				</div>
		</form>
		<hr>
	</div>
</div>
</center>
</body>

</html>

