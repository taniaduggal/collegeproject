<?php
include "connection.php";
$year=$_REQUEST['year'];
$sem=$_REQUEST['sem'];
$course=$_REQUEST['course'];
$session=$_REQUEST['session'];
//$paper=$_REQUEST['markstype'];
//$q="select * from admin_add_student where coursename='".$course."' && semester=".$sem."";
//echo $q;
//$res=mysqli_query($conn,$q);

?>
<table align='center'>
    <tr>
        <th>  Choose Roll No</th>
        <th>
            <select name="roll_no" id="roll_no" onchange="go4()">
                <option value="">--Select--</option>
                <?php
                $q="select * from admin_add_student where coursename='".$course."' && sem_id=".$sem."";
               $res=mysqli_query($conn,$q);
                while($row=mysqli_fetch_array($res))
                {
                    ?>
                    <option value="<?php echo $row[1]?>"><?php echo $row[1]?></option>
                <?php
                }
                ?>
            </select>
        </th>
    </tr>
</table>


<input type="hidden" id="course" value="<?php echo $course ?>">
<input type="hidden" id="session" value="<?php echo $session ?>">
<input type="hidden" id="semester" value="<?php echo $sem ?>">
<input type="hidden" id="year" value="<?php echo $year ?>">

