<?php
session_start();
$_SESSION['instructor']=$_POST['retsInstructor'];
$_SESSION['year']=$_POST['retsyear'];
$_SESSION['season']=$_POST['retsSeason'];

header("Location: reviewResults.php");

?>