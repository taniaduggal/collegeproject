<?php
include "connection.php";
session_start();
include "teacher_header.php";
$q="select teacher_id from teacher where email='".$_SESSION['teacher']."'";
$res1=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res1);
$id=$row[0];
$query="select * from teacher_grade where teacher_id='".$id."'";
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
    <th>SR.No.</th><th>Grade</th><th>Grade Point</th><th>Marks</th><th>Tools</th>
    </tr>";
$count="0";
while($row1=mysqli_fetch_array($res))
{
    $count++;
    $ans.="<tr>";
    $ans=$ans."<td>$count</td>";
    $ans=$ans."<td>$row1[1]</td>";
    $ans=$ans."<td>$row1[2]</td>";
    $ans=$ans."<td>$row1[3]</td>";
   // $ans=$ans."<td>$row1[5]</td>";
    $ans=$ans."<td><a href='teacher_edit_grade.php?q=".$row1[0]."'>EDIT</a></td>";
    // $ans=$ans."<td><a href='admin_delete_course.php?q=".$row1[0]."'>DELETE</a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
