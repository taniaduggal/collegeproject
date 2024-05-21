<?php
$c=$_REQUEST['course'];
$sem=$_REQUEST['semester'];
$subject=$_REQUEST['subjects'];
//echo $c,$sem,$subject;
?>
<table align='center'>
    <tr>
        <th>Choose Marks Type</th>
        <th><select id="markstype" onchange="go3()" >
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
<input type="hidden" id="sem" value="<?php echo $sem ?>">
<input type="hidden" id="subject" value="<?php echo $subject ?>">





