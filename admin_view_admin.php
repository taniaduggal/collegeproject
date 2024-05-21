<?php
include "connection.php";
include "admin_header.php";
$query7="select * from admin";
$res2=mysqli_query($conn,$query7);
?>
    <div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<br><br>
        <center><span style='font-size: xx-large'>VIEW ADMIN</span></center>
<br>
<?php
$ans="<table border=\"1\" align='center'>
<tr>

</tr>
    <tr>
    <th>SR.No.</th><th>Email</th><th>Type</th><th colspan='2'>Tools</th><th></th>
    </tr>";
$count=0;
while($row2=mysqli_fetch_array($res2))
{
    $count++;
    $ans.="<tr>";
    $ans=$ans."<td>$count</td>";
    $ans=$ans."<td>$row2[0]</td>";
    $ans=$ans."<td>$row2[2]</td>";
    $ans=$ans."<td><a href='admin_edit_admin.php?q=".$row2[0]."'><span style='color: black;'>EDIT</span></a></td>";
    $ans=$ans."<td><a href='admin_delete_admin.php?q=".$row2[0]."'><span style='color: black;'>DELETE</span></a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
?>
</div>