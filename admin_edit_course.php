<?php
$course_name=$_REQUEST['q'];
 include "connection.php";
$query7="select * from admin_courses where coursename='".$course_name."'";
$res3=mysqli_query($conn,$query7);
$row3=mysqli_fetch_array($res3);
include "admin_header.php";
?>
<form action="admin_edit_course_action.php" method="post">
<table border="1">
    <tr>
        <th colspan="2">
            <h1>EDIT COURSE </h1>
        </th>
    </tr>
    <tr>
        <th>
            Enter Course Name
        </th>
        <th>
            <input type="text" name="course" readonly value="<?php echo $row3[0]?>"required>
        </th>
    </tr>
    <tr>
        <th>Enter description:</th>
        <th>
            <textarea rows="5" cols="22" name="description"><?php echo $row3[1]?></textarea>
        </th>
    </tr>
    <tr>
        <th>Select course type</th>
        <th>
            <select name="coursetype" style="width: 170px;" required>
                <?php
                if($row3[2]=="UG")
                {
                    ?>
                    <option value="UG" selected>UG</option>
                    <option value="PG">PG</option>
                    <?php
                }
                else
                {
                    ?>
                    <option value="UG">UG</option>
                    <option value="PG" selected>PG</option>
                    <?php
                }
                ?>

            </select>
        </th>
    </tr>
    <tr>
        <th>Select duration</th>
        <th>
            <select name="duration" required style="width: 170px;">
                <?php
                $arr=array("6months","1year","2years","3years","4years","5years","5.5years");
                for($i=0;$i<count($arr);$i++)
                {
                    if($arr[$i]==$row3[3])
                    { ?>
                        <option value="<?php echo $arr[$i] ?>" selected><?php echo $arr[$i] ?></option>
              <?php }
                    else
                    {
                        ?>
                        <option value="<?php echo $arr[$i] ?>"><?php echo $arr[$i] ?></option>
                        <?php
                    }
                }

                ?>


            </select>
        </th>
    </tr>

    <tr>
        <th></th>
        <th><input type="submit" value="EDIT COURSE"</th>
    </tr>
</table>

</form>