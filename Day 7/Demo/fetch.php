<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_nternship";


	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$q = mysqli_query($connection,
		"select * from tbl_student") or die("Error". mysqli_error($connection));

	
	$row = mysqli_fetch_row($q);


	print_r($row);

	echo "<br/>".$row[0].$row[1].$row[2].$row[3];

	
	$row = mysqli_fetch_array($q);
	echo "<pre>";
	print_r($row);

	echo "<br/>".$row[0].$row[1].$row[2].$row[3];
	
	echo "<br/>".$row['stu_id'].$row['stu_name'].$row['stu_gender'].$row['stu_mobile'];
?> 