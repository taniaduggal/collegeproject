<?php
include "connection.php";
$teacherid=$_REQUEST['teacherid'];
$teachername=$_REQUEST['teachername'];
$fathername=$_REQUEST['fathername'];
$mothername=$_REQUEST['mothername'];
$teacherphoto=$_FILES['teacherphoto']['name'];
$type=$_FILES['teacherphoto']['type'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$cpassword=$_REQUEST['cpassword'];
$status=$_REQUEST['status'];
$designation=$_REQUEST['designation'];
$cno=$_REQUEST['cno'];
$dob=$_REQUEST['dob'];
$select="select email from teacher";
$res=mysqli_query($conn,$select);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($email==$row['email'])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:admin_addteacher.php?q=1");
}
else
{
    if($type=="image/jpeg"|| $type=="image/png" )
    {
        if($password==$cpassword)
        {
            $temp= $_FILES['teacherphoto']['tmp_name'];
            $path="teacher_images/".$teacherphoto;
            move_uploaded_file($temp,$path);
            $q1="insert into teacher values('".$teacherid."','".$teachername."','".$fathername."','".$mothername."','".$path."','".$address."','".$email."','".$password."','".$status."','".$designation."','".$cno."','".$dob."')";
            mysqli_query($conn,$q1);
            $q2="insert into teacher_grade values('','A+','10','','".$teacherid."')";
            mysqli_query($conn,$q2);
            $q3="insert into teacher_grade values('','A','9','','".$teacherid."')";
            mysqli_query($conn,$q3);
            $q4="insert into teacher_grade values('','B+','8','','".$teacherid."')";
            mysqli_query($conn,$q4);
            $q5="insert into teacher_grade values('','B','7','','".$teacherid."')";
            mysqli_query($conn,$q5);
            $q6="insert into teacher_grade values('','C+','6','','".$teacherid."')";
            mysqli_query($conn,$q6);
            $q7="insert into teacher_grade values('','C','5','','".$teacherid."')";
            mysqli_query($conn,$q7);
            $q8="insert into teacher_grade values('','D','4','','".$teacherid."')";
            mysqli_query($conn,$q8);
            $q9="insert into teacher_grade values('','E','2','','".$teacherid."')";
            mysqli_query($conn,$q9);
            $q10="insert into teacher_grade values('','F','0','','".$teacherid."')";
            mysqli_query($conn,$q10);
            header("location:admin_confirm_addteacher.php");

        }
        else
        {
            header("location:admin_addteacher.php?q=2");
        }

    }
    else
    {
        header("location:admin_addteacher.php?q=3");
    }

}
