<?php
include "connection.php";
session_start();
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$q2="select * from admin_add_student";
$res=mysqli_query($conn,$q2);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($email==$row[7]&& $pass==$row[28] )
    {
        echo $row[7]." ".$row[28];
        $flag=1;
        break;
    }
}
echo $flag;
if($flag==1)
{

    $_SESSION['student']=$email;
    header("location:student_homepage.php");
}
else
{
    header("location:student_login.php?q=1");
}

