<?php 
if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location:display.php");
}
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['id'];

	$q = mysqli_query($connection,
		"select * from tbl_students where stu_id='{$id}'") or die("Error". mysqli_error($connection));

	$row = mysqli_fetch_array($q);

if ($_POST) {
	$name= $_POST['name'];
	$email= $_POST['email']; 
  $mobile = $_POST['mobile'];
  $passwd = $_POST['passwd'];
  $gender= $_POST['gender'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $area = $_POST['area'];
  $pincode = $_POST['pincode'];
  $blood = $_POST['blood'];

	$qd = mysqli_query($connection,
		"update tbl_students set st_name='{$name}',st_email='{$email}',stu_mobile='{$mobile}',stu_passwd='{$passwd}',stu_gender='{$gender}',stu_dob='{$dob}',stu_address='{$sddress}',stu_area='{$area}',stu_pincode='{$pincode}',stu_blood='{$blood}' where stu_id='{$id}'") or die("Error". mysqli_error($connection));

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
		Name : <input type="name" name="name" value="<?php echo $row['st_name']; ?>" </br>
		Email : <input type="email" name="email" value="<?php echo $row['st_email']; ?>" </br>
		
		Mobile : <input type="number" name="mobile" value="<?php echo $row['stu_mobile']; ?>" </br>

		Passwd : <input type="passwd" name="passwd" value="<?php echo $row['stu_passwd']; ?>" </br>
		Gender : <select name="gender">
					<option value="Male" <?php if($row['stu_gender']=="Male"){ echo "selected"; } ?> >Male</option>
					<option value="Female" <?php if($row['stu_gender']=="Female"){ echo "selected"; } ?> >Female</option>
				</select></br>
	
		Dob : <input type="dob" name="dob" value="<?php echo $row['stu_dob']; ?>" </br>
		Address : <input type="address" name="address" value="<?php echo $row['stu_address']; ?>" </br>
		Area : <input type="area" name="area" value="<?php echo $row['stu_area']; ?>" </br>
		Pincode : <input type="pincode" name="pincode" value="<?php echo $row['stu_pincode']; ?>" </br>
		Blood : <input type="blood" name="blood" value="<?php echo $row['stu_blood']; ?>" </br>

		
		<input type="submit" />
		<a href='display.php'> View Records </a>
	</form>
</body>
</html>