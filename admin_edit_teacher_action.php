<?php
$teacher_id=$_REQUEST['teacherid'];
$teachername=$_REQUEST['teachername'];
$fathername=$_REQUEST['fathername'];
$mothername=$_REQUEST['mothername'];
$teacherphoto=$_FILES['teacherphoto']['name'];
$type=$_FILES['teacherphoto']['type'];
$temp= $_FILES['teacherphoto']['tmp_name'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$status=$_REQUEST['status'];
$designation=$_REQUEST['designation'];
$contact_number=$_REQUEST['contactnumber'];
include "connection.php";
if($type=="image/jpeg"|| $type=="image/png" )
{

        $path="teacher_images/".$teacherphoto;
        move_uploaded_file($temp,$path);
        $query20="update teacher set name='".$teachername."',father_name='".$fathername."',mother_name='".$mothername."',photo='".$path."',address='".$address."',email='".$email."',status='".$status."',designation='".$designation."',contact_no='".$contact_number."' where teacher_id='".$teacher_id."'";
        mysqli_query($conn,$query20);
        header("location:admin_view_teacher.php");

}
else
{
        header("location:admin_edit_teacher.php?q=2");
}

