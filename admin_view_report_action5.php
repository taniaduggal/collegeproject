<?php
$c=$_REQUEST['course'];
$session=$_REQUEST['session'];
$sem=$_REQUEST['sem'];
$subject=$_REQUEST['subject'];
$year=$_REQUEST['year'];

?>
<table align='center'>
    <tr>
    <th>Choose Marks Type</th>
<th><select id="markstype" onchange="go5()" >
    <option value="">--select--</option>
    <option value="minor1" >minor1</option>
    <option value="minor2" >minor2</option>
    <option value="quiz" >quiz</option>
    <option value="major" >major</option>
    <option value="all" >all</option>
</select>
    </th>
    </tr>
    </table>

<input type="hidden" id="course" value="<?php echo $c ?>">
<input type="hidden" id="session" value="<?php echo $session ?>">
<input type="hidden" id="sem" value="<?php echo $sem ?>">
<input type="hidden" id="subject" value="<?php echo $subject ?>">
<input type="hidden" id="year" value="<?php echo $year ?>">



