<?php
$teacher_id=$_REQUEST['q'];
include "connection.php";
$query9="delete from teacher where teacher_id='".$teacher_id."'";
mysqli_query($conn,$query9);
header("location:admin_view_teacher.php");