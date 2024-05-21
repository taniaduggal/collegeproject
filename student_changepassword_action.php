<?php
include "connection.php";
$email=$_REQUEST['email'];
$oldpassword=$_REQUEST['oldpassword'];
$newpassword=$_REQUEST['newpassword'];
$confirmpasssword=$_REQUEST['confirmpassword'];
$q="select * from admin_add_student";
$res1=mysqli_query($conn,$q);
$flag=0;
while($row=mysqli_fetch_array($res1))
{
    if($email== $row[7] && $oldpassword == $row[28])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    if($newpassword==$confirmpasssword)
    {
        $query19="update admin_add_student set password='".$newpassword."' where email='".$email."'";
        mysqli_query($conn,$query19);
        header("location:student_confirm_changepassword.php");
    }
    else
    {
        header("location:student_change_password.php?q=1");
    }
}
else
{
    header("location:student_change_password.php?q=2");
}
