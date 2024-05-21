<?php
$marks=$_REQUEST['marks'];
$grade=$_REQUEST['grade'];
$grade_point=$_REQUEST['grade_point'];
include "connection.php";
$query8="update grade_point set marks='".$marks."',grade='".$_REQUEST['grade']."',grade_point='".$_REQUEST['grade_point']."' where marks='".$marks."'";
mysqli_query($conn,$query8);
header("location:admin_view_grades.php");