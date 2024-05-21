<?php
include "connection.php";
$year=$_REQUEST['year'];
$sem=$_REQUEST['sem'];
$course=$_REQUEST['course'];
$session=$_REQUEST['session'];
//$paper=$_REQUEST['markstype'];
?>
<table align='center'>
    <tr>
        <th>  Choose Subjects</th>
        <th>
            <select name="subjects" id="subjects" onchange="go4()">
            <option value="">--Select--</option>
<?php
$q="select * from subjects where coursename='".$course."' && semester='".$sem."'";
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

