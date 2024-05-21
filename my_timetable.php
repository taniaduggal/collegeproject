<?php
include "teacher_header.php";
include "connection.php";
$teacher=$_SESSION['teacher'];
$f=$_SESSION['from'];
?>
<div style="background-image: url('img/blur8.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<form action="my_timetable.php" method="post" >
    <table  align="center" cellspacing="10" cellpadding="10">
        <br><br>
        <tr>
      <center><th colspan="2"><h4><span style='color: black;'>SESSION WISE SCHEDULE</span></h4></th></center>
        </tr>
        <tr>
            <th colspan="2">
                <select name="session" required>
                    <option value="">----Select----</option>
                    <option value="Jan-June">Jan-June</option>
                    <option value="July-December">July-December</option>
                </select>
            </th>
        </tr>


        <tr>
            <th>
                <?php
                if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                {
                    echo "<span style='color:red;'>Marks  Already Exists</span>";
                }

                ?>
            </th>
            <th>
         <input type="submit" name="btn" value="GO">
            </th>
        </tr>
    </table>
</form>
<?php
if(isset($_REQUEST['btn']))
{
    $session=$_REQUEST['session'];
    $select="select * from teacher where $f='".$teacher."'";
    $res_select=mysqli_query($conn,$select);
    $row_select=mysqli_fetch_array($res_select);
    $teacher_id=$row_select[0];
    $ans_query="select * from time_table inner join subjects on time_table.subject_code = subjects.subject_code inner join semester on semester.sem_id  = subjects.semester  where time_table.teacher_id = $teacher_id and time_table.session='".$session."' order by semester.semester_name";
    //echo $ans_query;
    $res_query=mysqli_query($conn,$ans_query);

  ?>
    <table align="center" >
        <tr>
            <th colspan="11"><h4><span style='color:#000000;'>MY TIME TABLE</span></h4></th>
        </tr>
         <tr>
            <th>S.No. &nbsp;</th>
            <th>Subject Code &nbsp;</th>
            <th>Course &nbsp;</th>
            <th>Semester &nbsp;</th>
            <th>Tools </th>
        </tr>
<?php

$count=0;
    while($row_query=mysqli_fetch_array($res_query))
    {
        $count++;
    ?>
    <tr align="center">
        <td><?php echo $count; ?></td>
        <td><?php echo $row_query[6]." ( ".$row_query[1]." )"; ?></td>
        <td><?php echo $row_query[11]; ?></td>
        <td><?php echo $row_query[14]; ?></td>
        <td><a href='teacher_view_student.php?q=<?php echo $row_query[11] ?>&s=<?php echo $row_query[12] ?>'><span style='color: black;'>View Students &nbsp; </span></a></td>
        <td><a href='teacher_add_marks.php?q=<?php echo $row_query[11] ?>&s=<?php echo $row_query[12] ?>&r=<?php echo $row_query[1] ?>'><span style='color: black;'>Add Marks &nbsp;</span></a></td>
        <td><a href='teacher_add_marks_by_excel.php?q=<?php echo $row_query[11] ?>&s=<?php echo $row_query[12] ?>&r=<?php echo $row_query[1] ?>'><span style='color: black;'>Add Marks By Excel &nbsp;</span></a></td>
        <td><a href='teacher_view_marks.php?q=<?php echo $row_query[11] ?>&s=<?php echo $row_query[12] ?>&r=<?php echo $row_query[1] ?>'><span style='color: black;'>View Marks</span></a></td>
    </tr>

        <?php
    } ?>

    </table>
        <?php
}
?>
    </div>



