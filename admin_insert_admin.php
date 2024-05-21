<?php
include "connection.php";
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$cpass=$_REQUEST['cpass'];
$type=$_REQUEST['type'];

$query="select * from admin";
$res=mysqli_query($conn,$query);
$flag=0;
while($row=mysqli_fetch_array($res))
{
    if($email==$row[0])
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    header("location:admin_signup.php?q=1");
}
else
{
    if($pass==$cpass)
    {
        $q1="insert into admin values('".$email."','".$pass."','".$type."')";
        mysqli_query($conn,$q1);
        header("location:admin_confirm_admin.php?q=admin");
    }
    else
    {
        header("location:admin_signup.php?q=2");
    }
}
