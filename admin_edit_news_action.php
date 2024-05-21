<?php
$news_id=$_REQUEST['newsid'];
$title=$_REQUEST['title'];
$descp=$_REQUEST['description'];
include "connection.php";
$query8="update news set title='".$title."',description='".$descp."' where news_id='".$news_id."'";
mysqli_query($conn,$query8);
header("location:admin_view_news.php");