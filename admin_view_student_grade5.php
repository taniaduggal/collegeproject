<?php
include "connection.php";
$roll_no=$_REQUEST['roll_no'];
$semester=$_REQUEST['sem'];
$q="select university_rollno,teacher_view_total_marks.subject_code,sem_id,teacher_view_total_marks.total,grade,subjects.credits from teacher_view_total_marks inner join subjects on teacher_view_total_marks.subject_code=subjects.subject_code where teacher_view_total_marks.university_rollno='".$roll_no."'";
$res=mysqli_query($conn,$q);
?>
<center><span style='font-size: xx-large'>VIEW GRADES</span></center>
<br>
<?php
$ans="<table border=\"1\" align='center'>
    <tr align='center'>
</tr>
    <tr>
    <th>SR.No.</th>
    <th>Roll No</th>
    <th>Subject Code</th>
    <th>Semester</th>
    <th>Total</th>
    <th>Grade</th>
    <th>Grade Points</th>
    <th>Credits</th>

    </tr>";
    $count=0;
$total=0;
$g=0;
    while($row1=mysqli_fetch_array($res))
    {
        $count++;
        $ans.="<tr align='center'>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row1[0]</td>";
        $ans=$ans."<td>$row1[1]</td>";

       // $sem=$row[3];
        $select="select semester_name from semester where sem_id=".$semester;
        $res1=mysqli_query($conn,$select);
        $row=mysqli_fetch_array($res1);
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row1[3]</td>";
        $v=$row1[3];
      //  echo $v;
        $ans=$ans."<td>$row1[4]</td>";
        $select2="select grade_point from grade_point where grade='".$row1[4]."'";
       // echo $select2;
        $res2=mysqli_query($conn,$select2);
        $row2=mysqli_fetch_array($res2);
        $ans=$ans."<td>$row2[0]</td>";
        $ans=$ans."<td>$row1[5]</td>";

        $ans.="</tr>";
    }

    $ans.="</table>";

    echo $ans;

    ?>
<br><br>
<center><input type="submit" value="Calculate SGPA" id="s1" onclick="go5()"></center>
<input type="hidden" id="course" value="<?php echo $course ?>">
<input type="hidden" id="session" value="<?php echo $session ?>">
<input type="hidden" id="semester" value="<?php echo $sem ?>">
<input type="hidden" id="year" value="<?php echo $year ?>">
<input type="hidden" id="roll_no" value="<?php echo $roll_no ?>">
