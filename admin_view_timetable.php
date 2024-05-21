<?php
include "connection.php";
include "admin_header.php";
$query6="select * from time_table order by teacher_id asc";
$res1=mysqli_query($conn,$query6);
$ans="<table border=\"1\">

<tr>
<th colspan='7'><h2>VIEW TIME TABLE</h2></th>
</tr>
    <tr>
    <th>SR.NO.</th><th>TEACHER NAME WITH ID</th><th>SUBJECT CODE</th><th>SESSION</th><th>
    YEAR
    </th> <th colspan='2'>Tools</th>
    </tr>";
$count=0;
while($row1=mysqli_fetch_array($res1))
{
    $count++;
    $ans.="<tr align=\"center\">";
    $ans=$ans."<td>$count</td>";
    $select="select name from teacher where teacher_id=".$row1[3];
    $res=mysqli_query($conn,$select);
    $row=mysqli_fetch_array($res);
    $name=$row[0];
    $ans=$ans."<td>".ucwords($name)." ($row1[3]) </td>";
    $ans=$ans."<td>$row1[1]</td>";
    $ans=$ans."<td>$row1[2]</td>";

    $ans=$ans."<td>$row1[4]</td>";
    $ans=$ans."<td><a href='admin_delete_time_table.php?q=".$row1[0]."'>DELETE</a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
