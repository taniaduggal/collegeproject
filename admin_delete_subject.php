<?php
$subject_code=$_REQUEST['q'];
include "connection.php";
$query15="delete from subjects where subject_code='".$subject_code."'";
echo $query15;
mysqli_query($conn,$query15);
header("location:admin_view_subjects.php");
