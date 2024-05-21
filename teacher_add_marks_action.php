<?php
include "connection.php";
session_start();
$status=$_REQUEST['m'];
echo $status;
$date=date('Y-m-d');
date_default_timezone_set('Asia/Kolkata');
$var=explode('-',$date);
$year=$var[0];

$time=date('h:i:s');
$course=$_REQUEST['q'];
$sem=$_REQUEST['s'];
$subject_code=$_REQUEST['r'];
$query="select teacher_id from teacher where email='".$_SESSION['teacher']."'";
$row=mysqli_query($conn,$query);
$res=mysqli_fetch_array($row);
$teacher_id=$res[0];
$query1="select student_id from admin_add_student where coursename='".$course."'&& sem_id='".$sem."'";
$row=mysqli_query($conn,$query1);
$flag=0;
$query2="select * from results where subject_code='$subject_code' and coursename='$course'";
$row2=mysqli_query($conn,$query2);
while($res=mysqli_fetch_array($row))
{
    $student_id=$res[0];
    $minor_1_marks=$_REQUEST["m1_$student_id"];
 //   echo $minor_1_marks;

   if(is_null($minor_1_marks))
    {
        $minor_1_marks=0;
    }
    $minor_2_marks=$_REQUEST["m2_$student_id"];
    if(is_null($minor_2_marks))
    {
        $minor_2_marks=0;
    }
    $quiz_marks=$_REQUEST["q_$student_id"];
    if(is_null($quiz_marks))
        $quiz_marks=0;
    $major_marks=$_REQUEST["ma_$student_id"];
    if(is_null($major_marks))
        $major_marks=0;
 //   header("location:teacher_add_marks_confirm.php");


   while($res1=mysqli_fetch_array($row2))
    {

         if( $student_id==$res1[4] && $res1[$status]!=0)
        {



                $flag=1;
                break;



           //   echo "NO";
            header("location:teacher_add_minor1marks.php");
        }
    }
//echo $flag;
       if($flag==1)
        {
            //echo "Not Done";
            header("location:my_timetable.php?q=1");
        }

        else
        {
            $q5="insert into results values('','".$subject_code."','".$course."','".$sem."','".$student_id."','".$teacher_id."','".$date."','".$time."','".$minor_1_marks."','".$minor_2_marks."','".$quiz_marks."','".$major_marks."','".$year."')";
            //echo $q5;
            mysqli_query($conn,$q5);
             header("location:teacher_add_marks_confirm.php");


        }





}