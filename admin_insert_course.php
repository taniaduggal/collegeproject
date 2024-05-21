<?php
include "connection.php";
$coursename=$_REQUEST['coursename'];
$description=$_REQUEST['description'];
$coursetype=$_REQUEST['coursetype'];
$duration=$_REQUEST['duration'];
$total_sem=$duration*2;
echo $total_sem;
$q4="select * from admin_courses";
$res=mysqli_query($conn,$q4);
$flag=0;
while($row=mysqli_fetch_array($res))

{
    if($coursename==$row[0])
    {
        $flag=1;
        break;
    }
}

if($flag==1)

{
    header("location:admin_course.php");
}

else

{
$q5="insert into admin_courses values('".$coursename."','".$description."','".$coursetype."','".$duration."')";
mysqli_query($conn,$q5);
    for($i=1;$i<=$total_sem;$i++)
    {
        $insert="insert into semester values(null,'Sem".$i."','$coursename')";
        echo $insert."<br>";
        mysqli_query($conn,$insert);
    }
header("location:admin_confirm_course.php");

}