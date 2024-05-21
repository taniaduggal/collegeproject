<?php
include "connection.php";
$subjects=$_REQUEST['allot_subject'];
$x=explode(",",$subjects);
print_r($x);
$session=$_REQUEST['sess'];
$year=$_REQUEST['year'];
$teacher=$_REQUEST['teacher'];
$c=count($x);
echo $c;
$flag=0;
for($i=0;$i<$c-1;$i++)
{
    $q="insert into time_table values('','".$x[$i]."','".$session."','".$teacher."','".$year."')";
    mysqli_query($conn,$q);
    header("location:confirm_allot.php?tid=$teacher&y=$year");

    /*echo $q."<br>";*/
}


