<?php
$subject_code=$_REQUEST['subjectcode'];
$subject_name=$_REQUEST['subjectname'];
$firstminor=$_REQUEST['firstminormarks'];
$secondminor=$_REQUEST['secondminormarks'];
$quiz=$_REQUEST['quiz'];
$major=$_REQUEST['major'];
include "connection.php";
$query17="update subjects set subject_name='".$subject_name."',first_minor='".$firstminor."',second_minor='".$secondminor."',quiz='".$quiz."',major='".$major."' where subject_code='".$subject_code."'";
mysqli_query($conn,$query17);
header("location:admin_view_subjects.php");