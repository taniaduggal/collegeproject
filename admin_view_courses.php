<?php
include "connection.php";
include "admin_header.php";
$query6="select * from admin_courses";

$res1=mysqli_query($conn,$query6);
?>
    <div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<br><br>
        <center><span style='font-size: xx-large'>VIEW COURSE</span></center>
<br>
<?php

$ans="<table align='center' border=\"1\">
<tr align='center'>

<tr>
</tr>
    <tr>
    <th>SR.No.</th><th>Course Name</th><th>Description</th><th>Type</th><th>Duration</th> <th colspan='2'>Tools</th>
    </tr>";
$count=0;
while($row1=mysqli_fetch_array($res1))
{
    $count++;
    $ans.="<tr>";
    $ans=$ans."<td>$count</td>";
    $ans=$ans."<td>$row1[0]</td>";
    $ans=$ans."<td>$row1[1]</td>";
    $ans=$ans."<td>$row1[2]</td>";
    $ans=$ans."<td>$row1[3]</td>";
    $ans=$ans."<td><a href='admin_edit_course.php?q=".$row1[0]."'><span style='color: black;'>EDIT</span></a></td>";
    $ans=$ans."<td><a href='admin_delete_course.php?q=".$row1[0]."'><span style='color: black;'>DELETE</span></a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
?>
        </div>