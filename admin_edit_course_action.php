<?php
$course_name=$_REQUEST['course'];
$descp=$_REQUEST['description'];
include "connection.php";
$query8="update admin_courses set description='".$descp."',type='".$_REQUEST['coursetype']."',duration='".$_REQUEST['duration']."' where coursename='".$course_name."'";
mysqli_query($conn,$query8);
header("location:admin_view_courses.php");