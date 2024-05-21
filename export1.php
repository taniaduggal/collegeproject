<?php
include_once("php-excel.class.php");
include "connection.php";
$course=$_REQUEST['q'];
$sem=$_REQUEST['s'];
$paper_type=$_REQUEST['v'];
$subject=$_REQUEST['b'];
$q1="select subject_code from subjects where subject_name='".$subject."' ";
$res1=mysqli_query($conn,$q1);
$row1=mysqli_fetch_array($res1);
$sub=$row1[0];
echo $sub;

$flag=0;
$type="";
if($paper_type=="minor1")
{
    $flag=1;
    $type="First Minor";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,
    results.minor_1_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id
    where results.coursename='".$course."' && results.sem_id=".$sem." && results.subject_code='".$sub."' && results.minor_1_marks!=0 order by admin_add_student.student_id asc";
}/*
else if($paper_type=="minor2")
{
    $flag=1;
    $type="Second Minor";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,results.minor_2_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
}
else if($paper_type=="quiz")
{

    $flag=1;
    $type="Quiz Marks";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,results.quiz_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
}
else if($paper_type=="major")
{

    $flag=1;
    $type="Major Marks";
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,results.major_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
}
else if($paper_type=="all")
{
    $s="Select admin_add_student.university_rollno,admin_add_student.name,admin_add_student.coursename,results.major_marks from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";

    $flag=0;
    $result=mysqli_query($conn,$s);

    $ar=array();
    $i=1;
    $count=0;
    $ar[0][0]="S.No";
    $ar[0][1]="Student Roll No";
    $ar[0][2]="Student Name";
    $ar[0][3]="Course Name";
    $ar[0][4]="First Minor";
    $ar[0][5]="Second Minor";
    $ar[0][6]="Quiz Marks";
    $ar[0][7]="Major Marks";

    while($row=mysqli_fetch_array($result))
    {
        $count++;
        $ar[$i][0]=$count;
        $ar[$i][1]= $row[13];
        $ar[$i][2]=$row[14];
        $ar[$i][3]= $row[2];
        $ar[$i][4]=$row[8];
        $ar[$i][5]=$row[9];
        $ar[$i][6]=$row[10];
        $ar[$i][7]=$row[11];
        $i++;
    }
}

//echo "Type is : ".$type." Flag=".$flag."<br>";
if($flag==1)
{
    //echo $s;
    $result=mysqli_query($conn,$s);
    $ar=array();
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

}*/
echo $s;
/*
$x = new Excel_XML('UTF-8',true);
$x->addArray ( $ar );
$x->generateXML ( "DB Export" );

?>
