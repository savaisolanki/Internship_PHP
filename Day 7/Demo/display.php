<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_nternship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$q = mysqli_query($connection,
		"select * from tbl_student where deleted = 0") or die("Error". mysqli_error($connection));

	echo "<table>";
	echo "<tr>";
	echo "<td>Id</td>";
	echo "<td>Name</td>";
	echo "<td>Gender</td>";
	echo "<td>Mobile</td>";
	echo "<td>Action</td>";
	echo "</tr>";
	
	while ($row = mysqli_fetch_array($q))
	 {
		echo "<tr>";
		echo "<td>{$row['stu_id']}</td>";
		echo "<td>{$row['stu_name']}</td>";
		echo "<td>{$row['stu_gender']}</td>";
		echo "<td>{$row['stu_mobileno']}</td>";
		echo "<td><a href='delete.php?deleteid={$row['stu_id']}'> Delete </a></td>";
		echo "</tr>";
	}
	echo "<tr> <td> <a href='insertdata.php'> Add Record </a> </td> </tr>";
	echo "</table>";
?>