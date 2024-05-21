<body>
<div style="background-image: url('img/blur6.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<?php
include "student_header.php";
include "connection.php";
$q="select photo, name from admin_add_student where email='".$_SESSION['student']."'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res);
$var=$row[0];
$var2=$row[1];
echo "
<br><br><center><span style='font-size:x-large;'>Welcome</span> <b style='font-size:xx-large;'>".$var2."</b></center>
<br><br>";

?>

<center><img src='<?php echo $var ?>' height='100px' width='100px'></center>
</div>
</body>
