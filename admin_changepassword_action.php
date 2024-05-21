<?php
include "connection.php";
$email=$_REQUEST['email'];
$oldpassword=$_REQUEST['oldpassword'];
$newpassword=$_REQUEST['newpassword'];
$confirmpasssword=$_REQUEST['confirmpassword'];
$q1="select * from admin";
$res=mysqli_query($conn,$q1);
$flag=0;
while($rows=mysqli_fetch_array($res))
{
    if($email== $rows[0] && $oldpassword == $rows[1])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    if($newpassword==$confirmpasssword)
    {
        $query18="update admin set password='".$newpassword."' where email='".$email."'";
        mysqli_query($conn,$query18);
        header("location:admin_confirm_changepassword.php");
    }
    else
    {
        header("location:admin_changepassword.php?q=1");
    }
}
else
{
    header("location:admin_changepassword.php?q=2");
}
