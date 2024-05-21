<?php
include "connection.php";
$exam=$_REQUEST['markstype'];
//echo $exam;
$course=$_REQUEST['course'];
$sem=$_REQUEST['sem'];
$sub=$_REQUEST['subject'];
$year=$_REQUEST['year'];
$session=$_REQUEST['session'];
$q1="select subject_code from subjects where subject_name='".$sub."' ";
$res1=mysqli_query($conn,$q1);
$row1=mysqli_fetch_array($res1);
$subject_code=$row1[0];
//echo $subject_code;
//echo $sem;
//echo $sub;
//echo $course;




//echo $course,$year,$session,$sem,$sub,$exam;

?>
<center><h2>VIEW RESULT </h2></center>
<div style="width: 500px;margin-left: 360px;margin-right: auto;">

    <form align="center" align="right" action="export.php?q=<?php echo $course?>&s=<?php echo $sem?>&a=<?php echo $sub?>&v=<?php echo $exam?>" method="post">
        <input type="submit" value="EXPORT TO EXCEL">
    </form>
</div>
<?php
if($exam=="minor1")
{

    $query="Select student_id,university_rollno,name,photo from admin_add_student where coursename='".$course."' && sem_id=".$sem." && adm_year=".$year." order by admin_add_student.student_id asc";
   // echo $query."<br>";

    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz=0;
    $major=0;
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$sub."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Photo</th><th>Course Name</th>
    <th>Minor1 Marks</th>
    </tr>";
    $minor1_marks="No Marks Added Yet";
    while($row=mysqli_fetch_array($res))
    {
        $minor1="select minor_1_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem."  && results.year=".$year." && results.subject_code='".$subject_code."'";
  //echo $minor1;
        $minor1_res=mysqli_query($conn,$minor1);
        while($minor1_row=mysqli_fetch_array($minor1_res))
        {
            if($minor1_row[0]==0)
            {
                continue;
            }
            else
            {
                $minor1_marks=$minor1_row[0];
            }
             //echo $minor1_marks."<br>";
        }
        $count++;

        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[1]</td>";
        $ans=$ans."<td>$row[2]</td>";
        $ans=$ans."<td><img src='$row[3]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$course</td>";
        $ans=$ans."<td>$minor1_marks</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;

}
else if($exam=="minor2")
{
    $query="Select student_id,university_rollno,name,photo from admin_add_student where coursename='".$course."' && sem_id=".$sem." && adm_year=".$year." order by admin_add_student.student_id asc";
    //echo $query."<br>";

    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz=0;
    $major=0;
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$sub."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Photo</th><th>Course Name</th>
    <th>Minor2 Marks</th>

    </tr>";
    $minor2_marks="No Marks Added Yet";
    while($row=mysqli_fetch_array($res))
    {
        $minor2="select minor_2_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.year=".$year." && results.subject_code='".$subject_code."'";
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
                $minor2_marks=$minor2_row[0];
            }
            // echo $minor2."<br>";
        }
        $count++;

        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[1]</td>";
        $ans=$ans."<td>$row[2]</td>";
        $ans=$ans."<td><img src='$row[3]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$course</td>";
        $ans=$ans."<td>$minor2_marks</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;
}
else if($exam=="quiz")
{
    $query="Select student_id,university_rollno,name,photo from admin_add_student where coursename='".$course."' && sem_id=".$sem." && adm_year=".$year." order by admin_add_student.student_id asc";
    //echo $query."<br>";

    $res=mysqli_query($conn,$query);

    $quiz="No Marks Added Yet";
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$sub."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Photo</th><th>Course Name</th>
   <th>Quiz Marks</th>

    </tr>";

    while($row=mysqli_fetch_array($res))
    {
        $quiz1="select quiz_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.year=".$year."&& results.subject_code='".$subject_code."'";
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

        $count++;

        $ans.="<tr>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row[1]</td>";
        $ans=$ans."<td>$row[2]</td>";
        $ans=$ans."<td><img src='$row[3]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$course</td>";
        $ans=$ans."<td>$quiz</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;

}

else if($exam=="major")
{
    $query="Select student_id,university_rollno,name,photo from admin_add_student where coursename='".$course."' && sem_id=".$sem." && adm_year=".$year." order by admin_add_student.student_id asc";
    //echo $query."<br>";

    $res=mysqli_query($conn,$query);
    $major="No Marks Added Yet";
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$sub."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Photo</th><th>Course Name</th>
    <th>Major Marks</th>
    </tr>";

    while($row=mysqli_fetch_array($res))
    {
        $major1="select major_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.year=".$year."&& results.subject_code='".$subject_code."'";
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
        $ans=$ans."<td><img src='$row[3]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$course</td>";
        $ans=$ans."<td>$major</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;
}
else if($exam=="all")
{


    $query="Select student_id,university_rollno,name,photo from admin_add_student where coursename='".$course."' && sem_id=".$sem." && adm_year=".$year." order by admin_add_student.student_id asc";
    //echo $query."<br>";

    $res=mysqli_query($conn,$query);
    $minor1=0;
    $minor2=0;
    $quiz="No Marks Added Yet";
    $major="No Marks Added Yet";
    $count=0;
    $ans="<table border=\"1\" align='center'>
<tr>
<th colspan='10'><center> Subject : ".$sub."</center></th>
</tr>

<tr>
    <th>Sr.no</th><th>Student Roll NO</th><th>Student Name</th><th>Photo</th><th>Course Name</th>
    <th>Minor1 Marks</th><th>Minor2 Marks</th><th>Quiz Marks</th><th>Major Marks</th>
    <th>Total Marks</th>
    </tr>";
$minor_1="No Marks Added Yet";
$minor_2="No Marks Added Yet";
//$total="No Marks Added Yet";

    while($row=mysqli_fetch_array($res))
    {
        $minor1="select minor_1_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.year=".$year."&& results.subject_code='".$subject_code."'";
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
        $minor2="select minor_2_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.year=".$year."&& results.subject_code='".$subject_code."'";
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
        $quiz1="select quiz_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.year=".$year."&& results.subject_code='".$subject_code."'";
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
        $major1="select major_marks from results where results.student_id=".$row[0]." and results.coursename='".$course."' && results.sem_id=".$sem." && results.year=".$year."&& results.subject_code='".$subject_code."'";
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
        $ans=$ans."<td><img src='$row[3]' height='100px' width='100px'></td>";
        $ans=$ans."<td>$course</td>";
        $ans=$ans."<td>$minor_1</td>";
        $ans=$ans."<td>$minor_2</td>";
        $ans=$ans."<td>$quiz</td>";
        $ans=$ans."<td>$major</td>";
        $total=($minor_1+$minor_2+$quiz+$major);
        $ans=$ans."<td>$total</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;

}

?>
