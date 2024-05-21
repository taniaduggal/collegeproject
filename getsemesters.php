<?php
$course=$_REQUEST['q'];
include "connection.php";
$query="select * from semester where courses='".$course."'";
//echo $query;
$res=mysqli_query($conn,$query);
?>
<th>Select semester</th>
<th>
    <select name="sem" style="width: 175px;" required>
        <option value="">----Select----</option>
        <?php
        while($row=mysqli_fetch_array($res))
        { ?>
            <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?></option>
        <?php }
        ?>

    </select>
</th>
