<?php
session_start();

$con = mysqli_connect("localhost", "root", "");
if(!$con)
{
	echo "Unable to establish connection.".mysqli_error();
}
$db = mysqli_select_db($con, "test");


$search_value = $_SESSION['Title'];
$query = "select Courseid, Title, Descrip,Rating_Q1, Rating_Q2, Rating_Q3, Rating_Q4 from courses,coursereviews where Title LIKE '%$search_value%' AND coursereviews.Course_ID = courses.Courseid";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$desc = $row['Descrip'];
$Title = $row['Title'];
$id = $row['Courseid'];
$query = "select ROUND(AVG(Rating_Q1),1) as Rating_Q1, ROUND(AVG(Rating_Q2),1) as Rating_Q2, ROUND(AVG(Rating_Q3),1) as Rating_Q3, ROUND(AVG(Rating_Q4),1) as Rating_Q4 from coursereviews where coursereviews.Course_ID = '$id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$a1 = $row['Rating_Q1'];
$a2 = $row['Rating_Q2'];
$a3 = $row['Rating_Q3'];
$a4 = $row['Rating_Q4'];
$query = "select comment from coursereviews where coursereviews.Course_ID = '$id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
#$comment = $row['comment'];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title></title>
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
    .foot{
        padding-top: 300px;
    }
    .prim{
        padding-left:130px;
    }
    .my-rowdes{
        padding-left:30px;
        padding-right:30px;
    }
</style>

<body>
<div class="card">
    <nav class="navbar navbar-expand-md navbar-light bg-light my-row">
        <a class="navbar-brand" href="#">
        <img src="https://donate.habib.edu.pk/Content/hu_logo.png" alt="">
        </a>
        <span class="navbar-text">
        <div class="collapse navbar-collapse my-col" id="navbarMenu">
            <ol class="navbar-nav">
                <li class="nav-item active">
                <a href="student.php" class="nav-link">Profile</a>
                </li>
                <li class="nav-item active">
                <a href="course_search.html" class="nav-link">Course Search</a>
                </li>
                <li class="nav-item active">
                <a href="instructor_search.html" class="nav-link">Instructor Search</a>
                </li>
            </ol>
        </div>
        </span>
    </nav>
    </div>
    <br> 
</div>         
<div class="container">
    <div class="card">
        <h5 class="card-header" id="name"><?php echo $Title?></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="row my-rowdes"><div class="form-group" id="description"><?php echo $desc?></div><hr></div>
                    </div>
                    <div class="col-6">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Weightage
                                <span class="badge badge-primary badge-pill"><?php echo $a1 ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Workload
                                <span class="badge badge-primary badge-pill"><?php echo $a2 ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Content
                                <span class="badge badge-primary badge-pill"><?php echo $a3?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Difficulty
                                <span class="badge badge-primary badge-pill"><?php echo $a4?></span>
                            </li>
                        </ul>
                        <br>
                        <div class="card mycard">
                            <h5 class="card-header">Comments:</h5>
                            <div class="card-body">
                            <?php
                            #session_start();

                            $con = mysqli_connect("localhost", "root", "");
                            if(!$con)
                            {
                                echo "Unable to establish connection.".mysqli_error();
                            }
                            $db = mysqli_select_db($con, "test");
                            
                            
                            $search_value = $_SESSION['Title'];
                            $query = "select Courseid, Title, Descrip,Rating_Q1, Rating_Q2, Rating_Q3, Rating_Q4 from courses,coursereviews where Title LIKE '%$search_value%' AND coursereviews.Course_ID = courses.Courseid";
                            $result = mysqli_query($con, $query) or die(mysqli_error($con));
                            $row = mysqli_fetch_array($result);
                            $id = $row['Courseid'];
                            $query = "select comment from coursereviews where coursereviews.Course_ID = '$id'";
                            $result = mysqli_query($con, $query) or die(mysqli_error($con));
                            ?>
                            <ol>
                            <?php
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                                <li><?php echo $row['comment'];?></li><br/>
                                <?php
                            }
                            ?>
                            </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<br>


<footer class="page-footer font-small bg-light">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright: Team AAS 
        </div>
        <!-- Copyright -->
      
</footer>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bs-animation.js"></script>
<script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>
