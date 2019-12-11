<?php 
$id=$_POST['idEn'];
$instructor=$_POST['instructorEn'];
$subject=$_POST['subjectEn'];
$year=date("Y");
if (date("m")>=8):
    $season="Fall";
else:
    $season="Spring";
endif;



if( isset($_POST['idEn'])):
    echo $id;
    echo $instructor;
    echo $subject;
    echo $year;
    echo $season;
   else:
    echo'nothing taken';
   endif;

$con = mysqli_connect("localhost", "root", "");
if(!$con)
{
    echo "Unable to establish connection.".mysqli_error();
}
$db = mysqli_select_db($con, "test");

$query = "select instructorid from instructors where Name LIKE '%$instructor%'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$in_id = $row['instructorid'];
$query = "select instructorid from instructors where Name LIKE '%$instructor%'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$row = mysqli_fetch_array($result);
$co_id = $row['courseid'];
$query = "insert into coursereviews values ($id, $co_id, 0, 0, 0, 0, 0, 0, '')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$query = "insert into instructor_reviews values ($id, $in_id, 0, 0, 0, 0, 0, 0, '')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$query = "insert into section values ($in_id, $co_id, $in_id, $id, 3 ,1)";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
?>