<?php
$sem=$_REQUEST['sem'];
$course=$_REQUEST['course'];
include "connection.php";
$query="insert into semester values(null,'Sem".$sem."','".$course."')";

$select="select * from semester";
$res=mysqli_query($conn,$select);
$flag=0;
$semester="Sem".$sem;
while($row=mysqli_fetch_array($res))
{
    echo $row[1]." ".$row[2]."<br>";
    if($semester==$row[1] && $course==$row[2])
    {

        $flag=1;
        break;
    }
}
if($flag==1)
{
    echo "Error";
    header("location:add_semester.php?q=1");
}
else
{
    echo $query;
    mysqli_query($conn,$query);
    header("location:confirm_semester.php");
}