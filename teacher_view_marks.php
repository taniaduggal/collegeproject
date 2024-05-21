<?php
include "connection.php";
include "teacher_header.php";
//echo "hello";
$coursename=$_REQUEST['q'];
$semester=$_REQUEST['s'];
$subject_code=$_REQUEST['r'];
//echo $semester;
//$q1="select * from results where coursename='".$courename."' && sem_id='".$semester."' && subject_code='".$subject_code."'";
//$res=mysqli_query($conn,$q1);
$query="Select student_id,university_rollno,name from admin_add_student where coursename='".$coursename."' && sem_id=".$semester." order by admin_add_student.student_id asc";
//echo $query."<br>";

$res=mysqli_query($conn,$query);
$minor1=0;
$minor2=0;
$quiz="No Marks Added Yet";
$major="No Marks Added Yet";
$count=0;
$ans="<table border=\"1\" align='center'>
    <tr>
        <th colspan='10'><center> Subject : ".$subject_code."</center></th>
    </tr>

    <tr>
        <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Course Name</th>
        <th>Minor1 Marks</th><th>Minor2 Marks</th><th>Quiz Marks</th><th>Major Marks</th>
        <th>Total Marks</th><th>Tools</th>
    </tr>";
    $minor_1="No Marks Added Yet";
    $minor_2="No Marks Added Yet";
    //$total="No Marks Added Yet";

    while($row=mysqli_fetch_array($res))
    {
    $minor1="select minor_1_marks from results where results.student_id=".$row[0]." && results.coursename='".$coursename."' && results.sem_id=".$semester."&& results.subject_code='".$subject_code."'" ;
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
    $minor2="select minor_2_marks from results where results.student_id=".$row[0]." && results.coursename='".$coursename."' && results.sem_id=".$semester." && results.subject_code='".$subject_code."'";
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
    $quiz1="select quiz_marks from results where results.student_id=".$row[0]." && results.coursename='".$coursename."' && results.sem_id=".$semester." && results.subject_code='".$subject_code."'";
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
    $major1="select major_marks from results where results.student_id=".$row[0]." && results.coursename='".$coursename."' && results.sem_id=".$semester." && results.subject_code='".$subject_code."'";
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

    $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[1]</td>";
        $ans=$ans."<td>$row[2]</td>";
       // $ans=$ans."<td><img src='$row[3]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$coursename</td>";
        $ans=$ans."<td>$minor_1</td>";
        $ans=$ans."<td>$minor_2</td>";
        $ans=$ans."<td>$quiz</td>";
        $ans=$ans."<td>$major</td>";
        $total=($minor_1+$minor_2+$quiz+$major);
        $ans=$ans."<td>$total</td>";
        $v=$row[0];
        $r=$row[1];
        //echo $r;
        //echo $subject_code;
        $ans=$ans."<td><a href='teacher_add_grades.php?q=$total &s=$v &p=$subject_code &w=$semester &u=$r'>Add Grades</a></td>";
        $ans.="</tr>";
//        $q4="select year from results where student_id=".$row[0]."";
       // echo $q4;
  //      $res4=mysqli_query($conn,$q4);
    //    $row4=mysqli_fetch_array($res4);

       // $q3="insert into teacher_view_total_marks values('','".$row[1]."','".$subject_code."','".$semester."','".$total."','','.$row4[0].')";
        //mysqli_query($conn,$q3);

    }
    $ans.="</table>";
echo $ans;
//echo $total;

?>
