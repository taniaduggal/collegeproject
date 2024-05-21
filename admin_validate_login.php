<?php
include "connection.php";
session_start();
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$type=$_REQUEST['type'];
$q2="select * from `admin`";
$res=mysqli_query($conn,$q2);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($email==$row[0]&& $pass==$row[1] && $type==$row[2])
    {
        echo $row[0]." ".$row[1];
        $flag=1;
        break;
    }
}
echo $flag;
if($flag==1)
    {
    $_SESSION['type']=$type;
    $_SESSION['admin']=$email;
    header("location:admin_homepage.php");
    }
else
    {
        header("location:admin_loginpage.php?q=1");
    }

