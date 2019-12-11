<?php 
$name=$_POST['name-fp'].' '.$_POST['name-lp'];
$desc=$_POST['desc'];



if( isset($_POST['name-fp'])):
    echo $name;
    echo $desc;
   else:
    echo'nothing taken';
   endif;

$con = mysqli_connect("localhost", "root", "");
if(!$con)
{
	echo "Unable to establish connection.".mysqli_error();
}
$db = mysqli_select_db($con, "test");


$f = substr($_POST['name-fp'], 0, 1);
$l = substr($_POST['name-lp'], 0, 1);
$email = strtolower($f.$l."@sse.habib.edu.pk");
$query = "insert into instructors(Name, Email, Descrip, profile, Password) values ('$name', '$email', '$desc', '8', 'aie')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));

?>