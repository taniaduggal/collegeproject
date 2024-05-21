<?php
$course_name=$_REQUEST['q'];
include "connection.php";
$query9="delete from admin_courses where coursename='".$course_name."'";
mysqli_query($conn,$query9);
header("location:admin_view_courses.php");