<?php
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
$gender=$_POST['a'];
$email=$_POST['email'];
$password=$_POST['pass'];
$mobile=$_POST['mn'];
$dob=$_POST['dob'];
$address=$_POST['area'];
$city=$_POST['city'];
$pincode=$_POST['code'];
$session=$_POST['session'];
echo $session;
$course=$_POST['course'];
include("connection.php");
$check="select * from tbl_user where email='$email' or mobile='$mobile'";
$res=mysqli_query($con,$check);
if($row=mysqli_fetch_array($res))
{
 header("location:register.php");
}
else
{
$query="insert into tbl_user(name,fname,gender,email,password,mobile,dob,address,city,pincode,sid,cid,status,dor) values('$name','$fname','$gender','$email','$password','$mobile','$dob','$address','$city','$pincode','$session','$course','N',curdate())";
mysqli_query($con,$query);
header("location:stu_login.php");
}
?>