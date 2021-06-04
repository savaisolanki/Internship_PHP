<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_nternship";
	
$connection = mysqli_connect($host, $username, $passwd, $dbname);
if ($_POST) {
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$mobile = $_POST['number'];

	$q = mysqli_query($connection,
		"insert into tbl_student(stu_name,stu_gender,stu_mobileno) values('{$name}','{$gender}','{$mobile}')") or die("Error". mysqli_error($connection));

	if($q){
		echo "<script>alert('Record Added');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Add To Database	</title>
</head>
<body>
	<form method="post">
		Name : <input type="name" name="name" />
		Gender : <select name="gender"><option value="Male">Male</option>
			<option value="Female">Female</option></select>
		Mobile : <input type="number" name="number" />
		<input type="submit" />
		<a href='display.php'> View Records </a>
	</form>
</body>
</html>