<?php
include "connection.php";
include "teacher_header.php";
$course=$_REQUEST['q'];
$sem=$_REQUEST['s'];
$query1="Select * from admin_add_student where coursename='".$course."' && sem_id=".$sem ;

$res=mysqli_query($conn,$query1);
?>
<center><span style='font-size: xx-large'>VIEW STUDENTS</span></center>
<br>
<table align='center'  border="1"></span>

    <tr>
    <th>SR.No.</th><th>University Roll No</th><th>Image</th>
    <th>Personal Details</th>
        <th>Qualification Details</th>
        <th>Admission<br> Through</th>
        <th>JEEE Details</th>
    </tr>

    <?php
$count=0;
while($row=mysqli_fetch_array($res))
{
    $count++;
    ?>
   <tr  border=\"1\"align='center'>
    <td><?php echo $count ?></td>
    <td><?php echo $row[1] ?></td>

    <td><img src='<?php echo $row[31] ?>' height='100' width='100'></td>
       <td>
           <table align='center' border="1">
               <tr>
                   <th>Student's Name :</th>
                   <td><?php echo $row[2] ?></td>
               </tr>
               <tr >
                   <th>Father's Name :</th>
                   <td><?php echo $row[3] ?></td>
               </tr>
               <tr >
                   <th>Mother's Name :</th>
                   <td><?php echo $row[4] ?></td>
               </tr>
               <tr>
                   <th>Parent's Contact No.</th>
                   <td><?php echo $row[26] ?></td>
               </tr>
               <tr>
                   <th>Address :</th>
                   <td><?php echo $row[5] ?></td>
               </tr>
               <tr>
                   <th>Correspondence <br> Address :</th>
                   <td><?php echo $row[27] ?></td>
               </tr>
               <tr>
                   <th>Contact No. :</th>
                   <td><?php echo $row[6] ?></td>
               </tr>
               <tr>
                   <th>Email :</th>
                   <td><?php echo $row[7] ?></td>
               </tr>
               <tr>
                   <th>Quota :</th>
                   <td><?php echo $row[8] ?></td>
               </tr>
               <tr>
                   <th>Gender :</th>
                   <td><?php echo $row[9] ?></td>
               </tr>
               <tr>
                   <th>Marital Status :</th>
                   <td><?php echo $row[10] ?></td>
               </tr>

           </table>
       </td>
       <td>
           <table align='center' border="1">
               <tr>
                   <th></th>
                   <th>School/College</th>
                   <th>Board</th>
                   <th>Session</th>
                   <th>Percentage<br>/CGPA</th>
               </tr>
               <tr>
                   <th>10th</th>
                   <td><?php echo $row[11] ?></td>
                   <td><?php echo $row[12] ?></td>
                   <td><?php echo $row[13] ?></td>
                   <td><?php echo $row[14] ?></td>
               </tr>
               <tr>
                   <th>12th</th>
                   <td><?php echo $row[15] ?></td>
                   <td><?php echo $row[16] ?></td>
                   <td><?php echo $row[17] ?></td>
                   <td><?php echo $row[18] ?></td>
               </tr>
               <tr>
                   <th>Graduation</th>
                   <td><?php echo $row[19] ?></td>
                   <td><?php echo $row[20] ?></td>
                   <td><?php echo $row[21] ?></td>
                   <td><?php echo $row[22] ?></td>
               </tr>
           </table>
       </td>
       <td><?php echo $row[23] ?></td>
       <td>
           <table align='center' border="1">
               <tr>
                   <th>JEEE Rank</th>
                   <td><?php echo $row[24] ?></td>
               </tr>
               <tr>
                   <th>JEEE Score</th>
                   <td><?php echo $row[25] ?></td>
               </tr>
           </table>
       </td>
    </tr>
<?php } ?>

</table>

