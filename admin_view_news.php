<?php
include "connection.php";
include "admin_header.php";
$query6="select * from news";
$res1=mysqli_query($conn,$query6);
?>
    <div style="background-image: url('img/blur10.jpg');height:500px ;background-size: 100%;background-repeat: no-repeat">
  <br><br>  <center><span style='font-size: xx-large'>VIEW NEWS</span></center>
    <br>
<?php

$ans="<table border=\"1\" align='center'>

<tr>

</tr>
    <tr align='center'>
    <th>TITLE</th><th>DESCRIPTION</th><th colspan='2'>Tools</th>
    </tr>";
while($row1=mysqli_fetch_array($res1))
{

    $ans.="<tr>";
    $ans=$ans."<td>$row1[1]</td>";
    $ans=$ans."<td>$row1[2]</td>";
    $ans=$ans."<td><a href='admin_edit_news.php?q=".$row1[0]."'><span style='color: black;'>EDIT</span></a></td>";
    $ans=$ans."<td><a href='admin_delete_news.php?q=".$row1[0]."'><span style='color: black;'>DELETE</span></a></td>";
    $ans.="</tr>";
}
$ans.="</table>";
echo $ans;
