<?php
$course=$_POST['course'];
//echo $course;
//  $con=mysqli_connect("localhost","root","","grs");
include("../connection.php");
 $check="select * from tbl_course where course='$course'";
 $res=mysqli_query($con,$check);
 if($row=mysqli_fetch_array($res))
 {
    header("location:course.php");
 }
 else
 {
 $query="insert into tbl_course(course,status,dor) values('$course','N',curdate())";
 mysqli_query($con,$query);
 header("location:course.php"); 
 }
?>