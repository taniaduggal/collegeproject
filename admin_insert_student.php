<?php
include "connection.php";
include "admin_header.php";

$studentid=$_REQUEST['student_id'];
$university_rollno=$_REQUEST['university_rollno'];
$fathername=$_REQUEST['father_name'];
$mothername=$_REQUEST['mother_name'];
$paddress=$_REQUEST['p_address'];
$caddress=$_REQUEST['c_address'];
$status=$_REQUEST['status'];
$quota=$_REQUEST['quota'];
$addthrough=$_REQUEST['add_through'];
$jeerank=$_REQUEST['jeerank'];
$course=$_REQUEST['course'];
$jeescore=$_REQUEST['jeescore'];
$semester=$_REQUEST['sem'];
$schoolname=$_REQUEST['schoolname'];
$tenthboard=$_REQUEST['tenthboard'];
$tenthsession=$_REQUEST['tenthsession'];
$tenthmarks=$_REQUEST['tenthmarks'];
$school12name=$_REQUEST['school12name'];
$twelthboard=$_REQUEST['12board'];
$twelthsession=$_REQUEST['12session'];
$twelthmarks=$_REQUEST['12marks'];
$gradname=$_REQUEST['gradname'];
$grad_board=$_REQUEST['grad_board'];
$grad_year=$_REQUEST['grad_year'];
$grad_year=$_REQUEST['grad_year'];
$grad_marks=$_REQUEST['grad_marks'];
$pgradname=$_REQUEST['pgradname'];
$pgrad_board=$_REQUEST['pgrad_board'];
$pgrad_year=$_REQUEST['pgrad_year'];
$pgrad_marks=$_REQUEST['pgrad_marks'];
$email=$_REQUEST['email'];
$pno=$_REQUEST['pno'];
$password=$_REQUEST['password'];
$gender=$_REQUEST['gender'];
$name=$_REQUEST['name'];
$cno=$_REQUEST['cno'];
$photo=$_FILES['photo']['name'];
$type=$_FILES['photo']['type'];
$dob=$_REQUEST['dob'];
$year=$_REQUEST['year'];
if($type=="image/jpeg"|| $type=="image/png" )
{
    $temp= $_FILES['photo']['tmp_name'];
    $path="student_images/".$photo;
    move_uploaded_file($temp,$path);
    $q7="insert into admin_add_student values('".$studentid."','".$university_rollno."','".$name."','".$fathername."','".$mothername."','".$paddress."','".$cno."','".$email."','".$quota."','".$gender."','".$status."','".$schoolname."','".$tenthboard."','".$tenthsession."','".$tenthmarks."','".$school12name."','".$twelthboard."','".$twelthsession."','".$twelthmarks."','".$gradname."','".$grad_board."','".$grad_year."','".$grad_marks."','".$addthrough."','".$jeerank."','".$jeescore."','".$pno."','".$caddress."','".$password."','".$course."','".$semester."','".$path."','".$dob."','".$year."')";
   //echo $q7;
    mysqli_query($conn,$q7);
    echo "<span style='color:red;'>Student added successfully</span>";


   // header("location:admin_confirm_addstudent.php");
}
else
{
    echo "<span style='color:red;'>Student couldn't be added.Enter the form again</span>";

  //  echo "no";
}


