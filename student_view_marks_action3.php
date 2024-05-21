<?php
include "connection.php";
session_start();
//echo "hello";
$c=$_REQUEST['course'];
$sem=$_REQUEST['semester'];
$subject=$_REQUEST['subjects'];
//echo $subject;
$q12="select subject_code from subjects where subject_name='".$subject."' ";
$res12=mysqli_query($conn,$q12);
$row12=mysqli_fetch_array($res12);
$sub=$row12[0];
//echo $sub;

$markstype=$_REQUEST['markstype'];
$q1="select sem_id from semester where semester_name='".$sem."' && courses='".$c."'";

$ress=mysqli_query($conn,$q1);
$roww=mysqli_fetch_array($ress);
$var=$roww[0];


//echo $c,$sem,$subject,$markstype;
$q2="select student_id,university_rollno from admin_add_student where email='".$_SESSION['student']."'";
$res=mysqli_query($conn,$q2);
//echo $q;
$row=mysqli_fetch_array($res);
$student_id=$row[0];
$rollno=$row[1];
//echo $rollno;
//echo $student_id;
?>
<center><h2>VIEW RESULT </h2></center>
<div style="width: 500px;margin-left: 360px;margin-right: auto;">

    <form align="center" align="right" action="export2.php?q=<?php echo $c?>&s=<?php echo $var?>&v=<?php echo $markstype?>&b=<?php echo $subject?>&a=<?php echo $rollno?>" method="post">
        <input type="submit" value="EXPORT TO EXCEL">
    </form>
</div>
<?php
if($markstype=="minor1")
{
    $query="Select university_rollno,name,photo from admin_add_student where coursename='".$c."' && sem_id=".$var." && student_id=".$student_id."";
//echo $query;
//$res1=mysqli_query($conn,$query);
    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz=0;
    $major=0;
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$subject."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Course Name</th>
    <th>Minor1 Marks</th>
    </tr>";

    while($row=mysqli_fetch_array($res))
    {
        $minor1="select minor_1_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var." && results.subject_code='".$sub."'";
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
                $minor1=$minor1_row[0];
            }
            // echo $minor1."<br>";
        }
        $count++;

        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row[1]</td>";
        //$ans=$ans."<td><img src='$row[2]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$c</td>";
        $ans=$ans."<td>$minor1</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;

}

else if($markstype=="minor2")
{
    $query="Select university_rollno,name,photo from admin_add_student where coursename='".$c."' && sem_id=".$var." && student_id=".$student_id."";
//echo $query;
//$res1=mysqli_query($conn,$query);
    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz=0;
    $major=0;
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$subject."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Course Name</th>
    <th>Minor2 Marks</th>
    </tr>";

    while($row=mysqli_fetch_array($res))
    {
        $minor2="select minor_2_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var." && results.subject_code='".$sub."'";
        //echo $minor1."<br>";
        $minor2_res=mysqli_query($conn,$minor2);
        while($minor2_row=mysqli_fetch_array($minor2_res))
        {
            if($minor2_row[0]==0)
            {
                continue;
            }
            else
            {
                $minor2=$minor2_row[0];
            }
            // echo $minor1."<br>";
        }
        $count++;

        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row[1]</td>";
        //$ans=$ans."<td><img src='$row[2]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$c</td>";
        $ans=$ans."<td>$minor2</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;

}
else if($markstype=="quiz")
{
    $query="Select university_rollno,name,photo from admin_add_student where coursename='".$c."' && sem_id=".$var." && student_id=".$student_id."";
//echo $query;
//$res1=mysqli_query($conn,$query);
    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz=0;
    $major=0;
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$subject."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Course Name</th>
    <th>Quiz Marks</th>
    </tr>";

    while($row=mysqli_fetch_array($res))
    {
        $quiz="select quiz_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var." && results.subject_code='".$sub."'";
        //echo $minor1."<br>";
        $quiz_res=mysqli_query($conn,$quiz);
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
            // echo $minor1."<br>";
        }
        $count++;

        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row[1]</td>";
        //$ans=$ans."<td><img src='$row[2]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$c</td>";
        $ans=$ans."<td>$quiz</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;

}
else if($markstype=="major")
{
    $query="Select university_rollno,name,photo from admin_add_student where coursename='".$c."' && sem_id=".$var." && student_id=".$student_id."";
//echo $query;
//$res1=mysqli_query($conn,$query);
    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz=0;
    $major=0;
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$subject."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Course Name</th>
    <th>Major Marks</th>
    </tr>";

    while($row=mysqli_fetch_array($res))
    {
        $major1="select major_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var." && results.subject_code='".$sub."' ";
        //echo $minor1."<br>";
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
            // echo $minor1."<br>";
        }
        $count++;

        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row[1]</td>";
        //$ans=$ans."<td><img src='$row[2]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$c</td>";
        $ans=$ans."<td>$major</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;

}
else if($markstype=="all")
{
    $query="Select university_rollno,name,photo from admin_add_student where coursename='".$c."' && sem_id=".$var." && student_id=".$student_id."";
//echo $query;
//$res1=mysqli_query($conn,$query);
    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz=0;
    $major=0;
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$subject."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Course Name</th>
     <th>Minor1 Marks</th><th>Minor2 Marks</th><th>Quiz Marks</th><th>Major Marks</th>
    <th>Total Marks</th>

    </tr>";

    while($row=mysqli_fetch_array($res))
    {
        $minor1="select minor_1_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var." &&results.subject_code='".$sub."'";
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
                $minor1=$minor1_row[0];
            }
            // echo $minor1."<br>";
        }
        $minor2="select minor_2_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var." &&results.subject_code='".$sub."'";
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
                $minor2=$minor2_row[0];
            }
            // echo $minor2."<br>";
        }
        $quiz1="select quiz_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var." &&results.subject_code='".$sub."'";
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
        $major1="select major_marks from results where results.student_id=".$student_id." and results.coursename='".$c."' && results.sem_id=".$var."&&results.subject_code='".$sub."' ";
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
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row[1]</td>";
        //$ans=$ans."<td><img src='$row[2]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$c</td>";
        $ans=$ans."<td>$minor1</td>";
        $ans=$ans."<td>$minor2</td>";
        $ans=$ans."<td>$quiz</td>";
        $ans=$ans."<td>$major</td>";
        $total=($minor1+$minor2+$quiz+$major);
        $ans=$ans."<td>$total</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;
}



?>
