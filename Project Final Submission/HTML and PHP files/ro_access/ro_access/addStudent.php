<?php 

$con = mysqli_connect("localhost", "root", "");
if(!$con)
{
	echo "Unable to establish connection.".mysqli_error();
}
$db = mysqli_select_db($con, "test");


$name=$_POST['name-f'].' '.$_POST['name-l'];
$id=$_POST['id'];
$f = substr($_POST['name-f'], 0, 1);
$l = substr($_POST['name-l'], 0, 1);
$email = strtolower($f.$l.$id."@st.habib.edu.pk");
$batch=$_POST['batch'];
$major=$_POST['major'];
$minor=$_POST['minor'];
$query = "insert into students values ($id, '$name', '$email', 'aie', $batch, '$major', '$minor')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));


?>