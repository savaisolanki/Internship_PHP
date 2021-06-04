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
      
        <form method="post">
    <table align="center">
      <tr>
        <td>Name :</td>
        <td><input type="text" name="name"/> <br/> <br/></td>
      </tr>
      <tr>
        <td>Email : </td>
        <td><input type="email" name="email" /><br/> <br/></td>
      </tr>
      <tr>
        <td>Mobile : </td>
        <td><input type="Number" name="mobile" /><br/> <br/></td>
      </tr>
      <tr>
        <td>Password : </td>
        <td><input type="password" name="passwd" /><br/> <br/></td>
      </tr>
                        <tr>
        <td>Gender : </td>
        <td><select name="gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                    </select></td>
      </tr>
      <tr>
        <td>Date of Birth : </td>
        <td><input type="date" name="dob" /><br/> <br/></td>
      </tr>
      
      
      <tr>
        <td>Address : </td>
        <td><textarea name="address"></textarea><br/> <br/></td>
      </tr>
      <tr>
        <td>Area : </td>
        <td><input type="text" name="area" /><br/> <br/></td>
      </tr>
      <tr>
        <td>Pincode : </td>
        <td><input type="Number" name="pincode"><br/> <br/></td>
      </tr>
                        <tr>
        <td>Blood Group : </td>
        <td><input type="text" name="blood" /><br/> <br/></td>
      </tr>
      <tr>
        <td><input type="submit" /></td>
        <td><input type="reset" /> | <a href="display.php"> View Records</a></td>
      </tr>
    </table>
  </form>
      
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







<?php 
  $host = "localhost";
  $username = "root";
  $passwd = "";
  $dbname = "db_internship";
        $connection = mysqli_connect($host, $username, $passwd, $dbname);
        if ($_POST) {
        $name  = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $passwd = $_POST['passwd'];
  $gender= $_POST['gender'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $area = $_POST['area'];
  $pincode = $_POST['pincode'];
        $blood = $_POST['blood'];
  $q = mysqli_query($connection,
    "insert into tbl_students(st_name,st_email,stu_mobile,stu_passwd,stu_gender,stu_dob,stu_address,stu_area,stu_pincode,stu_blood) 
    values('{$name}','{$email}','{$mobile}','{$passwd}','{$gender}','{$dob}','{$address}','{$area}','{$pincode}','{$blood}')") 
    or die("Error". mysqli_error($connection));

  if($q){
    echo"<script>alert('Record Added');</script>";
  }
}
?>




