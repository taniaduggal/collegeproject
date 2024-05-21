<?php
include"connection.php";
$sem=$_REQUEST['sem'];
$session=$_REQUEST['session'];
$course=$_REQUEST['course'];
$year=$_REQUEST['year'];
$roll_no=$_REQUEST['roll_no'];

//echo $roll_no,$sem;
$flag=1;
$g=0;
$total=0;
$ans="";
$q="select university_rollno,teacher_view_total_marks.subject_code,sem_id,teacher_view_total_marks.total,grade,subjects.credits from teacher_view_total_marks inner join subjects on teacher_view_total_marks.subject_code=subjects.subject_code where teacher_view_total_marks.university_rollno='".$roll_no."'";
$res=mysqli_query($conn,$q);
while($row1=mysqli_fetch_array($res))
{
    $select2="select grade_point from grade_point where grade='".$row1[4]."'";
    // echo $select2;
    $res2=mysqli_query($conn,$select2);
    $row2=mysqli_fetch_array($res2);
    $ans=$ans."<td>$row2[0]</td>";
    $ans=$ans."<td>$row1[5]</td>";
   $v=$row1[0];
    $s=$row1[2];


    $ans=$ans."<td>".($row2[0]*$row1[5])."</td>";
    $g+=($row2[0]*$row1[5]);
   // $total+=($row1[5]*10);
    $total+=($row1[5]);



    $ans.="</tr>";

}

//echo $total." ".$g;
//$sgpa=(($g/$total)*10);
$sgpa=(($g/$total));

?><br>
<br>
<br><br><br><br><br><br><br>
<?php

//


$q3="select * from sgpa";
$res4=mysqli_query($conn,$q3);
while($row4=mysqli_fetch_array($res4))
{
    if($roll_no==$row4[1] && $sem==$row4[2])
    {
    $flag=0;
    break;

    }
}
    if($flag==1)
    {


    $q2="insert into sgpa values('','".$roll_no."','".$sem."','".$sgpa."')";
    $res3=mysqli_query($conn,$q2);




    }



$q4="select sgpa from sgpa where university_rollno='".$roll_no."'";
//echo $q4;
$res5=mysqli_query($conn,$q4);
$row5=mysqli_fetch_array($res5);
echo "SGPA= ".$row5[0];


//echo $ans;

?>



