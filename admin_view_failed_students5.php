<?php
include"connection.php";
$year=$_REQUEST['year'];
$course=$_REQUEST['course'];
$session=$_REQUEST['session'];
$sem=$_REQUEST['sem'];
if($sem!="")
{



//echo $year." ".$course." ".$session." ".$sem;
$query="select `university_rollno`,`total`,`grade`,`year` from teacher_view_total_marks where (
`year`=".$year." and sem_id=".$sem.") and (`grade`='E' or `grade`='F')";
$res=mysqli_query($conn,$query);
$row_count=mysqli_num_rows($res);
if($row_count>0)
{

?>
<table align="center" border="1" style="border: 2px #000000 groove;" cellpadding="5" cellspacing="5" align="center">
    <tr>
        <th>Sr. No.</th>
        <th>University RollNo.</th>
        <th>Student Name</th>
        <th>Father's Name</th>
        <th>Total Marks</th>
        <th>Grade</th>
        <th>Year</th>
    </tr>
<?php
$count=0;
while($row=mysqli_fetch_array($res))
{
    $count++;
    ?>
        <tr  align="center">
            <td><?php echo $count ?></td>
            <td><?php echo $row[0] ?></td>
            <td>
                <?php
                $q="select name,father_name from admin_add_student where university_rollno='".$row[0]."'";
                //echo $q;
                $r=mysqli_query($conn,$q);
                $ro=mysqli_fetch_array($r);
                echo ucwords($ro[0]);
                ?>
            </td>
            <td><?php echo $ro[1] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
        </tr>
    <?php
}
?>
</table>
<?php
}
else
{
    echo "<span style='color:red;font-size: x-large'>No student(s) failed in this semester</span>";
}
}

?>
