<?php
include "connection.php";
$subjectcode=$_REQUEST['text1'];
$subjectname=$_REQUEST['text2'];
$firstminor=$_REQUEST['text3'];
$secondminor=$_REQUEST['text4'];
$semester=$_REQUEST['sem'];
$quiz=$_REQUEST['text5'];
$major=$_REQUEST['text6'];
$coursename=$_REQUEST['coursename'];
$credits=$_REQUEST['credits'];
$flag=0;
$select="select * from subjects";
$res=mysqli_query($conn,$select);
while($row=mysqli_fetch_array($res))
{
if($row[0]==$subjectcode)
{
    $flag=1;
    break;
}
}
if($flag==1)
{
    header("location:admin_add_subject.php?q=5");
}

else
{
    $query="insert into subjects values('".$subjectcode."','".$subjectname."','".$firstminor."','".$secondminor."','".$quiz."','".$major."','".$coursename."','".$semester."','".$credits."')";
    mysqli_query($conn,$query);
    header("location:admin_addedsubject_confirm.php");

}

