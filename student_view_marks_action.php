<?php
include "connection.php";
$sem=$_REQUEST['semester'];
$c=$_REQUEST['course'];

$qq="select sem_id from semester where semester_name='".$sem."' && courses='".$c."'";
//echo $qq;

$ress=mysqli_query($conn,$qq);
$roww=mysqli_fetch_array($ress);

$var=$roww[0];
//echo $var;


//echo $c,$sem;
?>
<table align='center'>
    <tr>
        <th>  Choose Subjects</th>

        <th>
            <select name="subjects" id="subjects" onchange="go2()">
                <option value="">--Select--</option>
                <?php
                $q="select * from subjects where coursename='".$c."' && semester='".$var."'";
                $res=mysqli_query($conn,$q);
                while($row=mysqli_fetch_array($res))
                {
                    ?>
                    <option value="<?php echo $row[1]?>"><?php echo $row[1]?></option>
                <?php
                }
                ?>
            </select>
        </th>







    </tr>
</table>


<input type="hidden" id="course" value="<?php echo $c?>">
<input type="hidden" id="sem" value="<?php echo $sem?>">


