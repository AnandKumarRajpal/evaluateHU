<?php
include_once('connection.php');
$query = "select * from course";
$result = mysql_query($query);
?>

<!DOCTYPE html>
<html>
	<title>
		<head> Fetch Data </head>
	</title>
<body>
	<?php
		while($rows= mysql_fetch_assoc($result))
		{
	?>
		<p><?php echo $rows['CourseID']; ?></p>
		<p><?php echo $rows['Title']; ?></p>
		<p><?php echo $rows['School']; ?></p>
	<?php
		}
	?>

</body>
</html>