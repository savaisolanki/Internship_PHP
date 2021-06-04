<?php 
if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location:display.php");
}
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_nternship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['id'];

	$q = mysqli_query($connection,
		"select * from tbl_student where stu_id='{$id}'") or die("Error". mysqli_error($connection));

	$row = mysqli_fetch_array($q);

if ($_POST) {
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$mobile = $_POST['number'];


	$qd = mysqli_query($connection,
		"update tbl_student set stu_name='{$name}',stu_gender='{$gender}',stu_mobileno='{$mobile}' where stu_id='{$id}'") or die("Error". mysqli_error($connection));

	if($qd){
		echo"<script>alert('Record Updated'); window.location='display.php';</script>";
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
		Name : <input type="name" name="name" value="<?php echo $row['stu_name']; ?>" />
		Gender : <select name="gender">
					<option value="Male" <?php if($row['stu_gender']=="Male"){ echo "selected"; } ?> >Male</option>
					<option value="Female" <?php if($row['stu_gender']=="Female"){ echo "selected"; } ?> >Female</option>
				</select>
		Mobile : <input type="number" name="number" value="<?php echo $row['stu_mobileno']; ?>" />
		<input type="submit" />
		<a href='display.php'> View Records </a>
	</form>
</body>
</html>