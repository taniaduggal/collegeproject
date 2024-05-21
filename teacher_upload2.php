<?php
include "teacher_header.php";
$filename=$_FILES['file1']['name'];
$temp=$_FILES['file1']['tmp_name'];
$type=$_FILES['file1']['type'];
$size=$_FILES['file1']['size'];

$path="uploaded_excel_files/".$filename;
move_uploaded_file($temp,$path);


$_SESSION["fname"]=$path;
?>
<table align='center'>
    <tr align='center'><td><?php echo "<br>File Name is: ".$filename;?></td></tr>
    <tr align='center'><td><?php echo "<br>File Type is: ".$type;?></td></tr>

    <tr align='center'><td><?php echo "<br>File Size is: ".$size." KB";?></td></tr>
</table>
<?php
$sem=$_REQUEST['s'];
$sub=$_REQUEST['r'];
$course=$_REQUEST['q'];


?><form action="teacher_upload3.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>" method="post" enctype="multipart/form-data">

    <center><input type="submit" value="Proceed"></center>

</form>
