<?php
include "connection.php";
include "teacher_header.php";
$query5="select * from teacher_view_total_marks order by id asc";
$res5=mysqli_query($conn,$query5);
?>
<div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
    <br><br>    <center><span style='font-size: xx-large'>VIEW Student's Grade</span></center>
    <br>
    <?php

    $ans="<table align='center' border='1'>

<tr align='center'>
</tr>
    <tr>
    <th>SR.No.</th>
    <th>Roll No</th>
    <th>Subect Code</th>
    <th>Semester</th>
    <th>Total</th>
    <th>Grade</th>
    </tr>";
    $count=0;
    while($row5=mysqli_fetch_array($res5))
    {
        $count++;
        $ans.="<tr align='center'>";
        $ans=$ans."<td>$count</td>";
        $ans=$ans."<td>$row5[1]</td>";
        $ans=$ans."<td>$row5[2]</td>";
        $sem=$row5[3];
        $select="select semester_name from semester where sem_id=".$sem;
        $res=mysqli_query($conn,$select);
        $row=mysqli_fetch_array($res);
        $ans=$ans."<td>$row[0]</td>";
        $ans=$ans."<td>$row5[4]</td>";
        $ans=$ans."<td>$row5[5]</td>";
        $ans.="</tr>";
    }
    $ans.="</table>";
    echo $ans;
    ?>
</div>