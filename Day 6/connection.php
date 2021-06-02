<?php
$host = "localhost";
$username ="root";
$passwd ="";
$dbname ="db_nternship";
$connection = mysqli_connect($host, $username, $passwd,$dbname);
if ($_POST) {
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$mobile = $_POST['txt3'];
$q = mysqli_query($connection,
        "insert into tbl_student (stu_name,stu_gender,stu_mobileno) values('{$name}','{$gender}','{$mobile}')")
        or die("Error". mysqli_error($connection));

if($q){
	echo"<script>alert('Record Added');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		
	</title>
</head>
<body>
	<form method="post">
		Name : <input type="text" name="txt1" />
		Gender : <select name="txt2">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                     <option value="Other">Other</option>
                </select>
		Mobile : <input type="Number" name="txt3" />
		<input type="submit" />
	</form>
</body>
</html>