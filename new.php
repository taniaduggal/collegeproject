<?php
include "connection.php";

?>
<table>
<tr>
<select name="subjects" id="subjects" onchange="go2()">
    <option value="">--Select--</option>
    <?php
    $q="select * from subjects where coursename='M.Tech' && semester='sem1'";
    $res=mysqli_query($conn,$q);
    while($row=mysqli_fetch_array($res))
    {
        ?>
        <option value="<?php echo $row[0]?>"><?php echo $row[0]?></option>
    <?php
    }
    ?>
</select>
</tr>
</table>