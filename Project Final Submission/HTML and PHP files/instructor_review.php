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

$id = $_SESSION['id'];
$name = $_SESSION['review'];

if(isset($_POST['submit-review']))
{

	$season = isset($_POST['season']) ? $_POST['season'] : '';
	$year = isset($_POST['year']) ? $_POST['year'] : '';
	$comment = isset($_POST['comment']) ? $_POST['comment'] : '';
	$q1 = isset($_POST['q1']) ? $_POST['q1'] : '';
	$q2 = isset($_POST['q2']) ? $_POST['q2'] : '';
	$q3 = isset($_POST['q3']) ? $_POST['q3'] : '';
	$q4 = isset($_POST['q4']) ? $_POST['q4'] : '';
	$id = $_SESSION['id'];
	$course = $_SESSION['review'];

	$query = "update instructor_reviews set rating_q1 = $q1, rating_q2 = $q2, rating_q3 = $q3, rating_q4 = $q4, comment = '$comment' where student_id = $id and instructor_id = (select instructorid from instructors where Name = '$name')";
	$result = mysqli_query($con, $query) or die(mysqli_error($con));
		
	
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
    <div class="card">
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
                <a href="#" class="nav-link">Course Search</a>
                </li>
                <li class="nav-item active">
                <a href="#" class="nav-link">Instructor Search</a>
                </li>
            </ul>
        </div>
        </span>

    </nav>
    </div>
    <br>
    <div class="team-boxed"></div>
    <div data-bs-parallax-bg="true" style="height:500px;background-image:url(https://habib.edu.pk/HU-news/wp-content/uploads/2014/09/HU-Panorama1.jpg);background-position:center;background-size:cover;"></div>
    <div class="container profile profile-view" id="profile">
        <center>
		<h1>Instructor Review</h1>
		<h1><?php echo$name ?></h1></center>
        <div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <hr><label>Note: &nbsp; 1: Strongly Disagree , 2: Disagree, 3: Not Sure, 4: Yes, 5: Definitely Yes<br></label><hr>
         <form method="post">
        <div class="row">
            <div class="col">
                <div class="form-group">
            <label for="session">Session:</label>
            <select name="session" id="session" class="form-control">
                <option value="Spring">Spring</option>
                <option value="Fall">Fall</option>
            </select>
        </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="year">Year:</label>
                    <input type="number" name="year" id="year" class="form-control" min="2014" max="2300">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            
            <input type="comment" name="comment" id="comment" class="form-control">
        </div>
        <div class="form-group">
            <label for="section">Section</label>
            
            <input type="text" name="section" id="section" class="form-control">
        </div>
        <div class="form-group">
            <div class="form-row">
                        <div class="col-sm-12 col-md-6"><label>Q1: Was the Instructor assertive in the class?</label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="q1" value="1"><label class="form-check-label" for="formCheck-1">1</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-1">2</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-3">3</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-2">4</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-5">5</label><br><br></div>
                        </div>
                        <div class="col-sm-12 col-md-6"><label>Q2: Instructor was well prepared for the lecture ?</label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="q2" value="1"><label class="form-check-label" for="formCheck-2">1</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="2"><label class="form-check-label" for="formCheck-2">2</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="3"><label class="form-check-label" for="formCheck-2">3</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="4"><label class="form-check-label" for="formCheck-2">4</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="5"><label class="form-check-label" for="formCheck-2">5</label><br><br></div>
                        </div>
                        <div class="col-sm-12 col-md-6"><label>Q3: Instructor was present during the office hours? </label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="q3" value="1"><label class="form-check-label" for="formCheck-3">1</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="2"><label class="form-check-label" for="formCheck-3">2</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="3"><label class="form-check-label" for="formCheck-3">3</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="4"><label class="form-check-label" for="formCheck-3">4</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="5"><label class="form-check-label" for="formCheck-3">5</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6"><label>Q4: Instructor was helpful and lenient in the class?</label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="q4" value="1"><label class="form-check-label" for="formCheck-4">1</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4"  name="q4" value="2"><label class="form-check-label" for="formCheck-4">2</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4"  name="q4" value="3"><label class="form-check-label" for="formCheck-4">3</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4"  name="q4" value="4"><label class="form-check-label" for="formCheck-4">4</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4"  name="q4" value="5"><label class="form-check-label" for="formCheck-4">5</label></div>
                        </div>
                    </div>
        </div>
        
        <div class="form-check">
            <input type="checkbox" id="accept-terms" class="form-check-input">
            <label for="accept-terms" class="form-check-label" required>I have filled this form with  full honesty.</label><br>
        </div><hr>
        <button type="submit" name="submit-review" class="btn btn-primary">Submit</button>
    </form>

    
    </div>

</body>
