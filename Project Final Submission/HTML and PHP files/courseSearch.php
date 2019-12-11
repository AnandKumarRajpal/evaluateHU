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
    $search=$_POST['isearch'];
    if (isset($_POST)):
        $query = "select * from courses where Title LIKE '%$search%'";
        $result = mysqli_query($con, $query);
        while($row = mysqli_fetch_array($result))
	    {
            $_SESSION['Title'] = $row['Title'];
            header("Location: resCourse.php");
        }
    endif;
    
?>