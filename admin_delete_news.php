<?php
$news_id=$_REQUEST['q'];
include "connection.php";
$query15="delete from news where news_id='".$news_id."'";
echo $query15;
mysqli_query($conn,$query15);
header("location:admin_view_news.php");
