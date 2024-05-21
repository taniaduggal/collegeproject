<?php
include_once("php-excel.class.php");
include "connection.php";
$course=$_REQUEST['q'];
$sem=$_REQUEST['s'];
$sub=$_REQUEST['r'];
$paper_type=$_REQUEST['t'];



if($paper_type=="minor1")
{
    $qq="select * from admin_add_student where coursename='".$course."'&& sem_id='".$sem."'";
    $result=mysqli_query($conn,$qq);

   /* $qq2="select semester_name from semester where sem_id='".$sem."'";
    $result2=mysqli_query($conn,$qq2);
    $row2=mysqli_fetch_array($result2);
    $sem_name=$row2[1];*/
 /*   $s="Select * from results inner join admin_add_student on admin_add_student.student_id=results.student_id
    where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
    $result=mysqli_query($conn,$s);
echo $s;*/
    $ar=array();
    $i=1;
    $count=0;
    $ar[0][0]="S.No";
    $ar[0][1]="Student Roll No";
    $ar[0][2]="Student Name";
    $ar[0][3]="Course Name";
    $ar[0][4]="First Minor";

//$ar[0][4]="Quiz";
//$ar[0][5]="Major";
//$ar[0][6]="Course Name";
//$ar[0][7]="Semester";
    while($row=mysqli_fetch_array($result))
    {
        //echo "hello";
        $count++;
        $ar[$i][0]= $count;
        $ar[$i][1]= $row[1];
        $ar[$i][2]=$row[2];
        $ar[$i][3]= $row[29];
        $i++;
    }

}


else if($paper_type=="minor2")
{
    //$s="Select * from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
    //$result=mysqli_query($conn,$s);
    $qq="select * from admin_add_student where coursename='".$course."'&& sem_id='".$sem."'";
    $result=mysqli_query($conn,$qq);

    $ar=array();
    $i=1;
    $count=0;
    $ar[0][0]="S.No";
    $ar[0][1]="Student Roll No";
    $ar[0][2]="Student Name";
    $ar[0][3]="Course Name";
    $ar[0][4]="Second Minor";
//$ar[0][4]="Quiz";
//$ar[0][5]="Major";
//$ar[0][6]="Course Name";
//$ar[0][7]="Semester";
    while($row=mysqli_fetch_array($result))
    {
        $count++;
        $ar[$i][0]= $count;
        $ar[$i][1]= $row[1];
        $ar[$i][2]=$row[2];
        $ar[$i][3]= $row[29];
        //$ar[$i][4]=$row[9];
        //$ar[$i][4]= $row[4];
        //$ar[$i][5]=$row[5];
        //$ar[$i][6]= $row[6];
        //$ar[$i][7]=$row[7];
        $i++;
    }
}

else if($paper_type=="quiz")
{
   // $s="Select * from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
    $qq="select * from admin_add_student where coursename='".$course."'&& sem_id='".$sem."'";

    $result=mysqli_query($conn,$qq);

    $ar=array();
    $i=1;
    $count=0;
    $ar[0][0]="S. No.";
    $ar[0][1]="Student Roll No";
    $ar[0][2]="Student Name";
    $ar[0][3]="Course Name";
    $ar[0][4]="Quiz Marks";
//$ar[0][4]="Quiz";
//$ar[0][5]="Major";
//$ar[0][6]="Course Name";
//$ar[0][7]="Semester";
    while($row=mysqli_fetch_array($result))
    {
        $count++;
        $ar[$i][0]= $count;
        $ar[$i][1]= $row[1];
        $ar[$i][2]=$row[2];
        $ar[$i][3]= $row[29];
        //$ar[$i][4]=$row[10];
        //$ar[$i][4]= $row[4];
        //$ar[$i][5]=$row[5];
        //$ar[$i][6]= $row[6];
        //$ar[$i][7]=$row[7];
        $i++;
    }
}
else if($paper_type=="major")
{
    //$s="Select * from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
    //$result=mysqli_query($conn,$s);
    $qq="select * from admin_add_student where coursename='".$course."'&& sem_id='".$sem."'";

    $result=mysqli_query($conn,$qq);

    $ar=array();
    $i=1;
    $count=0;
    $ar[0][0]="S.No";
    $ar[0][1]="Student Roll No";
    $ar[0][2]="Student Name";
    $ar[0][3]="Course Name";
    $ar[0][4]="Major Marks";
//$ar[0][4]="Quiz";
//$ar[0][5]="Major";
//$ar[0][6]="Course Name";
//$ar[0][7]="Semester";
    while($row=mysqli_fetch_array($result))
    {
        $count++;
        $ar[$i][0]= $count;
        $ar[$i][1]= $row[1];
        $ar[$i][2]=$row[2];
        $ar[$i][3]= $row[29];
        ///$ar[$i][4]=$row[11];
        //$ar[$i][4]= $row[4];
        //$ar[$i][5]=$row[5];
        //$ar[$i][6]= $row[6];
        //$ar[$i][7]=$row[7];
        $i++;
    }
}

else if($paper_type=="all")
{
    //$s="Select * from results inner join admin_add_student on admin_add_student.student_id=results.student_id where results.coursename='".$course."' && results.sem_id=".$sem." group by admin_add_student.student_id order by admin_add_student.student_id asc";
    //$result=mysqli_query($conn,$s);
    $qq="select * from admin_add_student where coursename='".$course."'&& sem_id='".$sem."'";

    $result=mysqli_query($conn,$qq);

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
        $ar[$i][1]= $row[1];
        $ar[$i][2]=$row[2];
        $ar[$i][3]= $row[29];
       // $ar[$i][4]=$row[8];
        //$ar[$i][5]=$row[9];
        //$ar[$i][6]=$row[10];
        //$ar[$i][7]=$row[11];
        $i++;
    }
}

$x = new Excel_XML('UTF-8',true);
$x->addArray ( $ar );
$x->generateXML ( "MARKS Export" );

?>
