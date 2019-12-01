<?php
include_once('connection.php');
$query = "select * from instructor";
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
	<p><?php echo $rows['InstructorID']; ?></p>
	<p><?php echo $rows['Name']; ?></p>
	<p><?php echo $rows['Email']; ?></p>
	<p><?php echo $rows['Description']; ?></p>
</body>
</html>