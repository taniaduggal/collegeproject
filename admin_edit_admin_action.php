<?php
$email=$_REQUEST['email'];
$type=$_REQUEST['type'];
include "connection.php";
$query12="update admin set type='".$type."' where email='".$email."'";
mysqli_query($conn,$query12);
header("location:admin_view_admin.php");