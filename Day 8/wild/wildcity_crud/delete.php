<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['deleteid'];

	$q = mysqli_query($connection,
		"update tbl_students set deleted = 1 where stu_id='{$id}'") or die("Error". mysqli_error($connection));

	if ($q) {
		echo "<script>alert('Record Deleted');window.location='display.php';</script>";
	}
?>