<?php
include "teacher_header.php";
$sem=$_REQUEST['s'];
$sub=$_REQUEST['r'];
$date=date('Y-m-d');
$var=explode('-',$date);
$year=$var[0];

//echo $year;
date_default_timezone_set('Asia/Kolkata');
$time=date('h:i:s');
$course=$_REQUEST['q'];
include"connection.php";/*
$query1="select student_id from admin_add_student where coursename='".$course."'&& sem_id='".$sem."'";
$row1=mysqli_query($conn,$query1);*/
$query="select teacher_id from teacher where email='".$_SESSION['teacher']."'";
$row2=mysqli_query($conn,$query);
$res2=mysqli_fetch_array($row2);
$teacher_id=$res2[0];
$flag=0;
include"excel_reader2.php";
include"connection.php";

$data = new Spreadsheet_Excel_Reader($_SESSION["fname"]);

//echo "No of columns ". $data->colcount($sheet_index=0)."<br>";
$r=$data->rowcount($sheet_index=0);




    $markstype=$data->val(1,"E");


    if($markstype=="First Minor")
    {
        for($i=2;$i<=$r;$i++)
        {

            $rollno=$data->val($i,"B");
            $query1="select student_id from admin_add_student where coursename='".$course."'&& sem_id='".$sem."' && university_rollno='".$rollno."'";
            //echo $query1."<br>";
            $res1=mysqli_query($conn,$query1);
            $row1=mysqli_fetch_array($res1);
            $student_id=$row1[0];

            $name=$data->val($i,"C");
            $course=$data->val($i,"D");
            $minor1marks=$data->val($i,"E");
            // echo $minor1marks;
            //echo $rollno." ".$name." ".$course." ".$minor1marks."<br>";
            $q5="insert into results values('','".$sub."','".$course."','".$sem."','".$student_id."','".$teacher_id."','".$date."','".$time."','".$minor1marks."','','','','".$year."')";
            mysqli_query($conn,$q5);
            //echo $q5;
                    }
        echo "<span style='color:red;'>Marks Added Successfully</span>";

    }



//echo "Marks Inserted Successfully";

 else if($markstype=="Second Minor")
    {


        for($i=2;$i<=$r;$i++)
        {
            $rollno=$data->val($i,"B");

            $query1="select student_id from admin_add_student where coursename='".$course."'&& sem_id='".$sem."' && university_rollno='".$rollno."'";
            //echo $query1."<br>";
            $res1=mysqli_query($conn,$query1);
            $row1=mysqli_fetch_array($res1);
            $student_id=$row1[0];

            $name=$data->val($i,"C");
            $course=$data->val($i,"D");
            $minor2marks=$data->val($i,"E");
            // echo $minor1marks;
            //echo $rollno." ".$name." ".$course." ".$minor1marks."<br>";



            $q5="insert into results values('','".$sub."','".$course."','".$sem."','".$student_id."','".$teacher_id."','".$date."','".$time."','','".$minor2marks."','','','".$year."')";
            mysqli_query($conn,$q5);
            //echo $q5;

        }
        echo "<span style='color:red;'>Marks Added Successfully</span>";

    }
    else if($markstype=="Quiz Marks")
    {


        for($i=2;$i<=$r;$i++)
        {

            $rollno=$data->val($i,"B");
            $query1="select student_id from admin_add_student where coursename='".$course."'&& sem_id='".$sem."' && university_rollno='".$rollno."'";
            //echo $query1."<br>";
            $res1=mysqli_query($conn,$query1);
            $row1=mysqli_fetch_array($res1);
            $student_id=$row1[0];

            $name=$data->val($i,"C");
            $course=$data->val($i,"D");
            $quizmarks=$data->val($i,"E");
            // echo $minor1marks;
            //echo $rollno." ".$name." ".$course." ".$minor1marks."<br>";



            $q5="insert into results values('','".$sub."','".$course."','".$sem."','".$student_id."','".$teacher_id."','".$date."','".$time."','','','".$quizmarks."','','".$year."')";
            mysqli_query($conn,$q5);
            //echo $q5;
            echo "<span style='color:red;'>Marks Added Successfully</span>";
        }

    }
    else if($markstype=="Major Marks")
    {


        for($i=2;$i<=$r;$i++)
        {

            $rollno=$data->val($i,"B");
            $query1="select student_id from admin_add_student where coursename='".$course."'&& sem_id='".$sem."' && university_rollno='".$rollno."'";
            //echo $query1."<br>";
            $res1=mysqli_query($conn,$query1);
            $row1=mysqli_fetch_array($res1);
            $student_id=$row1[0];

            $name=$data->val($i,"C");
            $course=$data->val($i,"D");
            $majormarks=$data->val($i,"E");
            // echo $minor1marks;
            //echo $rollno." ".$name." ".$course." ".$minor1marks."<br>";



            $q5="insert into results values('','".$sub."','".$course."','".$sem."','".$student_id."','".$teacher_id."','".$date."','".$time."','','','','".$majormarks."','".$year."')";
            mysqli_query($conn,$q5);
            //echo $q5;
            echo "<span style='color:red;'>Marks Added Successfully</span>";
        }

    }



