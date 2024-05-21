<?php
include "connection.php";

$marks=$_REQUEST['q'];
$subject_code=$_REQUEST['p'];
$student_id=$_REQUEST['s'];
$semester=$_REQUEST['w'];
$roll_no=$_REQUEST['u'];



$q4="select year from results where student_id=".$student_id."";
echo $q4;
$res4=mysqli_query($conn,$q4);
$row4=mysqli_fetch_array($res4);


 //mysqli_query($conn,$q3);



if($marks>80)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','A+','.$row4[0].')";

echo $q1;
    // $q1="update teacher_view_total_marks set grade='A+' where total=".$marks."";
    //mysqli_query($conn,$q1);
}

elseif($marks>75 && $marks<=80)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','A',".$row4[0].")";
    echo $q1;
    //mysqli_query($conn,$q1);
}

elseif($marks>70 && $marks<=75)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','B+','.$row4[0].')";
    //mysqli_query($conn,$q1);
}
elseif($marks>60 && $marks<=70)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','B','.$row4[0].')";
    //mysqli_query($conn,$q1);
}
elseif($marks>50 && $marks<=60)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','C+','.$row4[0].')";
    //mysqli_query($conn,$q1);
}
elseif($marks>40 && $marks<=50)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','C','.$row4[0].')";
    //mysqli_query($conn,$q1);
}
elseif($marks>30 && $marks<=40)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','D','.$row4[0].')";
    //mysqli_query($conn,$q1);
}
elseif($marks>20 && $marks<=30)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','E','.$row4[0].')";
    //mysqli_query($conn,$q1);
}
elseif($marks>0 && $marks<=20)
{
    $q1="insert into teacher_view_total_marks values('','".$roll_no."','".$subject_code."','".$semester."','".$marks."','F','.$row4[0].')";
   // mysqli_query($conn,$q1);
}
mysqli_query($conn,$q1);
header("location:teacher_grade_added_confirmation.php");