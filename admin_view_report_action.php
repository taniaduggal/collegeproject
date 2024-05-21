<body>
<?php
$coursename=$_REQUEST['coursename'];
//echo $coursename;
?>


<table>
<tr>
<th>Choose Session</th>
<th><select id="sess" onchange="go1()" >
    <option value="">--select--</option>
    <option value="jan-june" >Jan-June</option>
    <option value="july-dec" >July-Dec</option>
    </select>
    </th>
</tr>
</table>
<input type="hidden" id="course" value="<?php echo $coursename ?>">

</body>