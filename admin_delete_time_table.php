<?php
$tt_id=$_REQUEST['q'];
include "connection.php";
$query9="delete from time_table where tt_id='".$tt_id."'";
mysqli_query($conn,$query9);
header("location:admin_view_timetable.php");