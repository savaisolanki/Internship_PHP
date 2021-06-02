<?php 
  $host = "localhost";
  $username = "root";
  $passwd = "";
  $dbname = "db_internshipphp";
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
    "insert into tbl_studentdata(stu_name,stu_email,stu_mobile,stu_passwd,stu_gender,stu_dob,stu_address,stu_area,stu_pincode,stu_blood) 
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
<body style="background-color:yellow">
  <form method="post">
    <table align="left">
      <tr>
        <td>Name :</td>
        <td><input type="text" name="name" /> <br/> <br/></td>
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
        <td><textarea name="address" cols="40" rows="6"></textarea><br/> <br/></td>
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
        <td><input type="reset" /></td>
      </tr>
    </table>
  </form>
</body>
</html>





