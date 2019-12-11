<?php
//creating variables
session_start();

$course = $_SESSION['review'];
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

//creating data variables
//$season = mysqli_real_escape_string($conn, $_POST['season']);
$season = isset($_GET['season']) ? $_GET['season'] : '';
//$year = mysqli_real_escape_string($conn, $_POST['year']);
$year = isset($_GET['year']) ? $_GET['year'] : '';
//$comment = mysqli_real_escape_string($conn, $_POST['comment']);
$comment = isset($_GET['comment']) ? $_GET['comment'] : '';
//$q1 = mysqli_real_escape_string($conn, $_POST['q1']);
//$q2 = mysqli_real_escape_string($conn, $_POST['q2']);
//$q3 = mysqli_real_escape_string($conn, $_POST['q3']);
//$q4 = mysqli_real_escape_string($conn, $_POST['q4']);
$q1 = isset($_GET['q1']) ? $_GET['q1'] : '';
$q2 = isset($_GET['q2']) ? $_GET['q2'] : '';
$q3 = isset($_GET['q3']) ? $_GET['q3'] : '';
$q4 = isset($_GET['q4']) ? $_GET['q4'] : '';


$sql = "update coursereviews set (Rating_Q1 = $q1, Rating_Q2 = $q2, Rating_Q3 = $q3, Rating_Q4 = $q4, total_reviews += 1, checked = 1 where coursereviews.student_id = 5173 and coursereviews.course_id=3";
$url="http://localhost/c%20review/";
if($conn->query($sql) === TRUE){
  header("Location: $url ");
}

$conn->close();
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
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="student.php" class="nav-link">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Course Search</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Instructor Search</a>
                </li>
            </ul>
        </div>

    </nav>
    <div class="team-boxed"></div>
    <div data-bs-parallax-bg="true" style="height:500px;background-image:url(https://habib.edu.pk/HU-news/wp-content/uploads/2014/09/HU-Panorama1.jpg);background-position:center;background-size:cover;"></div>
    <div class="container profile profile-view" id="profile">
        <h1><center>Course Review</center></h1>
        <h1><center><?php echo$course ?></center></h1>
		<div class="row">
            <div class="col-md-12 alert-col relative">
                <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
            </div>
        </div>
        <hr><label>Note:</label>
		<ol>
			<li>Strongly Disagree</li> 
			<li>Disagree</li>
			<li>Not Sure</li>
			<li>Yes</li>
			<li>Definitely Yes</li>
		</ol>
		<hr>
         <form action="course_review.php" method="post">
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
            <div class="form-row">
                        <div class="col-sm-12 col-md-6"><label>Q1: Did course content have an appropriate weightage?</label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="q1" value="1"><label class="form-check-label" for="formCheck-1">1</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-1">2</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-3">3</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-2">4</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"  name="q1" value="1"><label class="form-check-label" for="formCheck-5">5</label><br><br></div>
                        </div>
                        <div class="col-sm-12 col-md-6"><label>Q2: Was course work easy for you?</label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="q2" value="1"><label class="form-check-label" for="formCheck-2">1</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="2"><label class="form-check-label" for="formCheck-2">2</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="3"><label class="form-check-label" for="formCheck-2">3</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="4"><label class="form-check-label" for="formCheck-2">4</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"  name="q2" value="5"><label class="form-check-label" for="formCheck-2">5</label><br><br></div>
                        </div>
                        <div class="col-sm-12 col-md-6"><label>Q3: I found the course content interesting and easy to grasp.</label>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="q3" value="1"><label class="form-check-label" for="formCheck-3">1</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="2"><label class="form-check-label" for="formCheck-3">2</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="3"><label class="form-check-label" for="formCheck-3">3</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="4"><label class="form-check-label" for="formCheck-3">4</label></div>
                            <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3"  name="q3" value="5"><label class="form-check-label" for="formCheck-3">5</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6"><label>Q4: The course was challenging for me?</label>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>