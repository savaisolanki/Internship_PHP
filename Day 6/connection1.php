<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";
        $connection = mysqli_connect($host, $username, $passwd, $dbname);

if ($_POST) {
	$name  = $_POST['txt1'];
	$email = $_POST['txt2'];
	$mobile = $_POST['txt3'];
	$passwd = $_POST['txt4'];
	$gender= $_POST['txt5'];
	$dob = $_POST['txt6'];
	$address = $_POST['txt7'];
	$area = $_POST['txt8'];
	$pincode = $_POST['txt9'];
        $blood = $_POST['txt10'];
	$q = mysqli_query($connection,
		"insert into tbl_students(st_name,st_email,stu_mobile,stu_passwd,stu_gender,stu_dob,stu_address,stu_area,stu_pincode,stu_blood) 
		values('{$name}','{$email}','{$mobile}','{$passwd}','{$gender}','{$dob}','{$address}','{$area}','{$pincode}','{$blood}')") 
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
            Form
		
	</title>
	
</head>
<body style="background-color:lightgreen">
	<form method="post">
		<table align="center">
			<tr>
				<td>Name :</td>
				<td><input type="text" name="txt1" /> <br/> <br/></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="txt2" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Mobile : </td>
				<td><input type="Number" name="txt3" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="txt4" /><br/> <br/></td>
			</tr>
                        <tr>
				<td>Gender : </td>
				<td><select name="txt5">
					<option value="Male">Male</option>
					<option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    </select></td>
			</tr>
			<tr>
				<td>Date of Birth : </td>
				<td><input type="date" name="txt6" /><br/> <br/></td>
			</tr>
			
			
			<tr>
				<td>Address : </td>
				<td><textarea name="txt7" cols="30" rows="6"></textarea><br/> <br/></td>
			</tr>
			<tr>
				<td>Area : </td>
				<td><input type="text" name="txt8" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Pincode : </td>
				<td><input type="Number" name="txt9"><br/> <br/></td>
			</tr>
                        <tr>
				<td>Blood Group : </td>
				<td><input type="text" name="txt10" /><br/> <br/></td>
			</tr>
			<tr>
				<td><input type="submit" /></td>
				<td><input type="reset" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
