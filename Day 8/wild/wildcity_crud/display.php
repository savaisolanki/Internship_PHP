<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Wild City - Tony Pires</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<?php
include 'header.html';
?>
<div id="mainContent">

 <div class="blog">
    
      <h2 class="blogTitle"><a href="single.html">Click here to view an article page with comments</a></h2>
      <h3 class="meta">posted by <a href="#">johnnyboy</a> on monday, june 1, 2008 <img src="images/bullet_w.gif" alt="" class="bullet" /> <a href="#">26 comments</a> <img src="images/bullet_w.gif" alt="" class="bullet" /> tagged in <a href="#">Funny</a>, <a href="#">City Life</a>, <a href="#">Technology</a> <img src="images/bullet_w.gif" alt="" class="bullet" /> <a href="#">full article</a></h3>
      
        <?php 
  $host = "localhost";
  $username = "root";
  $passwd = "";
  $dbname = "db_internship";

  $connection = mysqli_connect($host, $username, $passwd, $dbname);

  $q = mysqli_query($connection,
    "select * from tbl_students where deleted = 0") or die("Error". mysqli_error($connection));


    

  echo "<table>";
  echo "<tr>";
  echo "<td>name</td>";
  echo "<td>email</td>";
  echo "<td>mobile</td>";
  echo "<td>passwd</td>";
  echo "<td>gender</td>";
  echo "<td>dob</td>";
  echo "<td>address</td>";
  echo "<td>area</td>";
  echo "<td>pincode</td>";
  echo "<td>blood</td>";
  echo "<td>Action</td>";
  echo "</tr>";
  
  while ($row = mysqli_fetch_array($q))
   {
    echo "<tr>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['stu_mobile']}</td>";
    echo "<td>{$row['stu_passwd']}</td>";
    echo "<td>{$row['stu_gender']}</td>";
    echo "<td>{$row['stu_dob']}</td>";
    echo "<td>{$row['stu_address']}</td>";
    echo "<td>{$row['stu_area']}</td>";
    echo "<td>{$row['stu_pincode']}</td>";
    echo "<td>{$row['stu_blood']}</td>";
    echo "<td><a href='delete.php?deleteid={$row['stu_id']}'> Delete </a></td>";
    echo "<td><a href='update.php?id={$row['stu_id']}'> update </a></td>";
    echo "</tr>";
  }
  echo "<tr> <td> <a href='form.php'> Add Record </a> </td> </tr>";
  echo "</table>";
?>
      
      </div><!-- end .blog -->	
      </div><!-- end .blog -->




<?php
include 'archive.html';
include 'cato.html';
?> 
<br class="clear" />     
</div>
<?php
include 'footer.html'; 
?>
</div>
</body>
</html>












