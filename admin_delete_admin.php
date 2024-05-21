<?php
$email=$_REQUEST['q'];
include "connection.php";
$query10="delete from admin where email='".$email."'";
echo $query10;
mysqli_query($conn,$query10);
header("location:admin_view_admin.php");
