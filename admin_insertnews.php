<?php
include "connection.php";
$title=$_REQUEST['title'];
$description=$_REQUEST['description'];
$q1="insert into news values ('','".$title."','".$description."')";
mysqli_query($conn,$q1);

header("location:admin_confirm_news.php");