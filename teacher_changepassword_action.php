<?php
include "connection.php";
session_start();
$oldpassword=$_REQUEST['oldpassword'];
$newpassword=$_REQUEST['newpassword'];
$confirmpasssword=$_REQUEST['confirmpassword'];
$from=$_SESSION['from'];
if($from=="contact_no")
{
    $q_no="select * from teacher where contact_no='".$_SESSION['teacher']."' and password='".$oldpassword."'";
    $res=mysqli_query($conn,$q_no);

}
else
{
    $q_no="select * from teacher where email='".$_SESSION['teacher']."' and password='".$oldpassword."'";
    $res=mysqli_query($conn,$q_no);

}
$row_count=mysqli_num_rows($res);

$select="select * from teacher where $from='".$_SESSION['teacher']."'";
$res_select=mysqli_query($conn,$select);
$row_select=mysqli_fetch_array($res_select);
$tid=$row_select[0];


if($row_count>0)
{
    echo $row_count;
    if($newpassword==$confirmpasssword)
    {
        $query18="update teacher set password='".$newpassword."' where teacher_id='".$tid."'";
        mysqli_query($conn,$query18);
        echo $query18;
        header("location:teacher_confirm_changepassword.php");
    }
    else
    {
        echo "New incorrect";
        header("location:teacher_change_password.php?q=1");
    }
}
else
{
    echo "Incorrect";
    header("location:teacher_change_password.php?q=2");
}
