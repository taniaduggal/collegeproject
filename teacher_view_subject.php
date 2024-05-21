<?php
include "../administrator/connection.php";
include "teacher_header.php";
$from=$_SESSION['from'];
if($from=="contact_no")
{
    $q_no="select teacher_id from teacher where contact_no='".$_SESSION['teacher']."'";
}
else
{
    $q_no="select teacher_id from teacher where email='".$_SESSION['teacher']."'" ;
}
echo $q_no;
$res=mysqli_query($conn,$q_no);
$row_select=mysqli_fetch_array($res);
$tid=$row_select[0];
echo "<br> $tid";




/*$ans="<table border=\"1\">
<tr>
<th colspan='7'><h2>VIEW SUBJECTS</h2></th>
</tr>
    <tr>
    <th>SR.No.</th><th>Subject Code</th><th>Session</th><th>Year</th><th colspan='2'>Tools</th>
    </tr>";
$count=0;
while($row2=mysqli_fetch_array($res2))
{
    $count++;
    $ans.="<tr>";
    $ans=$ans."<td>$count</td>";
    $ans=$ans."<td>$row2[1]</td>";
    $ans=$ans."<td>$row2[2]</td>";
    $ans=$ans."<td>$row2[4]</td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;*/
