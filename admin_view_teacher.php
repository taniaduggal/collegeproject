<?php
include "connection.php";
include "admin_header.php";
$query19="select * from teacher";
$res2=mysqli_query($conn,$query19);

?>
    <div style="background-image: url('img/blur10.jpg');height: auto;background-size: 100%;background-repeat: no-repeat">
<br><br>    <center><span style='font-size: xx-large'>VIEW TEACHER</span></center>
<br>
<?php
$ans="<table border=\"1\" align='center'>
    <tr align='center'>
    <th>SR.No.</th><th align='center'>Teacher Id</th><th >Name</th><th>Father Name</th><th>Mother Name</th><th>Photo</th><th>Address</th><th>Email</th><th>Status</th><th>Designation</th><th>Contact Number</th>
       <th colspan='2'>Tools</th>
    </tr>";
$count=0;
while($row2=mysqli_fetch_array($res2))
{
    $count++;
    $ans.="<tr align='center'>";
    $ans=$ans."<td>$count</td>";
    $ans=$ans."<td>$row2[0]</td>";
    $ans=$ans."<td>$row2[1]</td>";
    $ans=$ans."<td>$row2[2]</td>";
    $ans=$ans."<td>$row2[3]</td>";
    $ans=$ans."<td><img src='$row2[4]' height='100' width='100'></td>";
    $ans=$ans."<td>$row2[5]</td>";
    $ans=$ans."<td>$row2[6]</td>";
    $ans=$ans."<td>$row2[8]</td>";
    $ans=$ans."<td>$row2[9]</td>";
    $ans=$ans."<td>$row2[10]</td>";
    $ans=$ans."<td><a href='admin_edit_teacher.php?q=".$row2[0]."'><span style='color: black;'>EDIT</span></a></td>";
    $ans=$ans."<td><a href='admin_delete_teacher.php?q=".$row2[0]."'><span style='color: black;'>DELETE</span></a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
?>
        </div>