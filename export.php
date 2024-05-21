<?php
include_once("php-excel.class.php");
include "connection.php";
$course=$_REQUEST['q'];
$sem=$_REQUEST['s'];
$paper_type=$_REQUEST['v'];
$subject=$_REQUEST['a'];
//echo $subject;
$q="select subject_code from subjects where subject_name='".$subject."' ";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res);
$sub=$row[0];

$flag=0;
$type="";
if($paper_type=="minor1")
{
    $flag=1;
    $type="First Minor";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,
    results.minor_1_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id
    where results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."' && results.minor_1_marks!=0 order by admin_add_student.student_id asc";
}
else if($paper_type=="minor2")
{
    $flag=1;
    $type="Second Minor";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,
    results.minor_2_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id
     where results.coursename='".$course."' && results.sem_id=".$sem." &&  results.subject_code='".$sub."' &&results.minor_2_marks!=0 order by admin_add_student.student_id asc";
}
else if($paper_type=="quiz")
{

    $flag=1;
    $type="Quiz Marks";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,results.quiz_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id
    where results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."'&& results.quiz_marks!=0 order by admin_add_student.student_id asc";
}
else if($paper_type=="major")
{

    $flag=1;
    $type="Major Marks";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,results.major_marks from results
    inner join admin_add_student on admin_add_student.student_id=results.student_id where
    results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."' && results.major_marks!=0 order by admin_add_student.student_id asc";
}
else if($paper_type=="all")
{

    $flag=0;
    $s="Select student_id,university_rollno,name,photo from admin_add_student where coursename='".$course."' && sem_id=".$sem." order by admin_add_student.student_id asc";
    //echo $s."<br>";

    $res=mysqli_query($conn,$s);
    $minor1=0;
    $minor2=0;
    $quiz="No Marks Added Yet";
    $major="No Marks Added Yet";
    $count=0;
    $minor_1="No Marks Added Yet";
    $minor_2="No Marks Added Yet";
//$total="No Marks Added Yet";
    $ar=array();
    $i=1;
    $ar[0][0]="Sr.No";
    $ar[0][1]="Student Roll No";
    $ar[0][2]="Student Name";
    $ar[0][3]="Course Name";
    $ar[0][4]="Minor1 Marks";
    $ar[0][5]="Minor2 Marks";
    $ar[0][6]="Quiz Marks";
    $ar[0][7]="Major Marks";
    $ar[0][8]="Total Marks";
    while($row=mysqli_fetch_array($res))
    {
        $minor1="select minor_1_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."'";
        //echo $minor1."<br>";
        $minor1_res=mysqli_query($conn,$minor1);
        while($minor1_row=mysqli_fetch_array($minor1_res))
        {
            if($minor1_row[0]==0)
            {
                continue;
            }
            else
            {
                $minor_1=$minor1_row[0];
            }
            // echo $minor1."<br>";
        }
        $minor2="select minor_2_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."'";
        //echo $minor2."<br>";
        $minor2_res=mysqli_query($conn,$minor2);
        while($minor2_row=mysqli_fetch_array($minor2_res))
        {
            if($minor2_row[0]==0)
            {
                continue;
            }
            else
            {
                $minor_2=$minor2_row[0];
            }
            // echo $minor2."<br>";
        }
        $quiz1="select quiz_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."'";
        //echo $quiz1."<br>";
        $quiz_res=mysqli_query($conn,$quiz1);
        while($quiz_row=mysqli_fetch_array($quiz_res))
        {
            if($quiz_row[0]==0)
            {
                continue;
            }
            else
            {
                $quiz=$quiz_row[0];
            }
            //echo $quiz."<br>";
        }
        $major1="select major_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."'";
        //echo $major1."<br>";
        $major1_res=mysqli_query($conn,$major1);
        while($major1_row=mysqli_fetch_array($major1_res))
        {
            if($major1_row[0]==0)
            {
                continue;
            }
            else
            {
                $major=$major1_row[0];
            }
            //echo $major1;
        }
        $count++;
        $i++;
        echo $i;
        $ar[$i][0]= $count;
        $ar[$i][1]=$row[1];
        $ar[$i][2]=$row[2];
        $ar[$i][3]=$course;
        $ar[$i][4]=$minor_1;
        $ar[$i][5]=$minor_2;
        $ar[$i][6]=$quiz;
        $ar[$i][7]=$major;
        $total=($minor_1+$minor_2+$quiz+$major);
        $ar[$i][8]=$total;

    }
}

if($flag==1)
{
    //echo $s;
    $result=mysqli_query($conn,$s);

    $ar=array();
    $i=1;
    $count=0;
    $ar[0][0]="S.No";
    $ar[0][1]="Student Roll No";
    $ar[0][2]="Student Name";
    $ar[0][3]="Course Name";
    $ar[0][4]=$type;
    while($row=mysqli_fetch_array($result))
    {
        $count++;
        $ar[$i][0]= $count;
        $ar[$i][1]= $row[0];
        $ar[$i][2]=$row[1];
        $ar[$i][3]= $row[2];
        $ar[$i][4]=$row[3];
        $i++;
    }

}
$x = new Excel_XML('UTF-8',true);
$x->addArray ( $ar );
$x->generateXML ( "DB Export" );
?>

