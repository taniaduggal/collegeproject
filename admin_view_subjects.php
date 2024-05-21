<?php
include "connection.php";
include "admin_header.php";
$query14="select * from subjects order by semester asc";
$res_subject=mysqli_query($conn,$query14);
?>
    <div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<br><br>    <center><span style='font-size: xx-large'>VIEW SUBJECT</span></center>
    <br>
<?php

$ans="<table align='center' border='1'>

<tr align='center'>
</tr>
    <tr>
    <th>SR.No.</th>
    <th>Course Name</th>
    <th>Semester</th>
    <th>Subject Code</th>
    <th>Subject Name</th>

    <th>First Minor Total Marks</th>
    <th>Second Minor Total Marks</th>
    <th>Quiz Total Marks</th>
    <th>Major Total Marks</th>
    <th colspan='2'>Tools</th>
    </tr>";
$count=0;
while($row6=mysqli_fetch_array($res_subject))
{
    $count++;
    $ans.="<tr align='center'>";
    $ans=$ans."<td>$count</td>";
    $ans=$ans."<td>$row6[6]</td>";
    $sem=$row6[7];
    $select="select semester_name from semester where sem_id=".$sem;
    $res=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($res);
    $ans=$ans."<td>$row[0]</td>";
    $ans=$ans."<td>$row6[0]</td>";
    $ans=$ans."<td>".ucwords($row6[1])."</td>";
    $ans=$ans."<td>$row6[2]</td>";
    $ans=$ans."<td>$row6[3]</td>";
    $ans=$ans."<td>$row6[4]</td>";
    $ans=$ans."<td>$row6[5]</td>";



    $ans=$ans."<td><a href='admin_edit_subject.php?q=".$row6[0]."'><span style='color: black;'>EDIT</span></a></td>";
    $ans=$ans."<td><a href='admin_delete_subject.php?q=".$row6[0]."'><span style='color: black;'>DELETE</span></a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
?>
        </div>