<?php


include("excel_reader2.php");
include "teacher_header.php";


$data = new Spreadsheet_Excel_Reader($_SESSION["fname"]);


error_reporting(0);
?>
<table
<tr align='center'><td><?php echo "No of columns ". $data->colcount($sheet_index=0)."<br>";?></td></tr>

</table>
<?php
$r=$data->rowcount($sheet_index=0);


$s="<table align='center'>";
for($i=1;$i<=$r;$i++)
{
    $s=$s."<tr>";

    $s=$s."<td>";
    $s=$s.$data->val($i,"A");
    $s=$s."</td>";

    $s=$s."<td>";
    $s=$s.$data->val($i,"B");
    $s=$s."</td>";

    $s=$s."<td>";
    $s=$s.$data->val($i,"C");
    $s=$s."</td>";

    $s=$s."<td>";
    $s=$s.$data->val($i,"D");
    $s=$s."</td>";

    $s=$s."<td>";
    $s=$s.$data->val($i,"E");
    $s=$s."</td>";



    $s=$s."</tr>";
}

$s=$s."</table>";

echo $s;


$sem=$_REQUEST['s'];
$sub=$_REQUEST['r'];
$course=$_REQUEST['q'];


?>



<form action="teacher_upload4.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>" method="post">

    <center><input type="submit" value="go insert"></center>

</form>

