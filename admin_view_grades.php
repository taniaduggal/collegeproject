<?php
include "connection.php";
include "admin_header.php";
$query="select * from grade_point";

$res=mysqli_query($conn,$query);
?>
    <center><span style='font-size: xx-large'>VIEW GRADES</span></center>
    <br>
<?php

$ans="<table align='center' border=\"1\">
<tr align='center'>

<tr>
</tr>
    <tr>
    <th>SR.No.</th><th>Marks</th><th>Grade</th><th>Grade Point</th><th>Tools</th>
    </tr>";
while($row1=mysqli_fetch_array($res))
{

    $ans.="<tr>";
    $ans=$ans."<td>$row1[0]</td>";
    $ans=$ans."<td>$row1[1]</td>";
    $ans=$ans."<td>$row1[2]</td>";
    $ans=$ans."<td>$row1[3]</td>";
    $ans=$ans."<td><a href='admin_edit_grade.php?q=".$row1[0]."'>EDIT</a></td>";
   // $ans=$ans."<td><a href='admin_delete_course.php?q=".$row1[0]."'>DELETE</a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
