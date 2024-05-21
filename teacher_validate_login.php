<?php
include "connection.php";
session_start();
$email_no=$_REQUEST['email_no'];
$password=$_REQUEST['pass'];
$q_no="select * from teacher where contact_no='".$email_no."' and password='".$password."'";
$res=mysqli_query($conn,$q_no);

if(mysqli_num_rows($res))
{
    $from="contact_no";
}
else
{
    $q_email="select * from teacher where email='".$email_no."' and password='".$password."'";
    $res=mysqli_query($conn,$q_email);
    //echo $q_email;
    $from="email";
}
$row=mysqli_fetch_array($res);
$from_e_no= $row["$from"];
$pass=$row["password"];
if($from_e_no==$email_no && $password==$pass)
{
    $_SESSION['teacher']=$from_e_no;
    $_SESSION['from']=$from;
    header("location:teacher_home.php");
}
else
{
    header("location:teacher_login.php?q=1");
}

