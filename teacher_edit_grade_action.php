<?php
$marks=$_REQUEST['marks'];
$grade=$_REQUEST['grade'];
$grade_point=$_REQUEST['grade_point'];
$percentage=$_REQUEST['percentage'];
include "connection.php";
$query9="update teacher_grade set grade='".$grade."',grade_point='".$_REQUEST['grade_point']."',marks='".$_REQUEST['marks']."',percentage='".$_REQUEST['percentage']."' where grade='".$grade."'";
mysqli_query($conn,$query9);
header("location:teacher_mygrades.php");