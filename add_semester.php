<?php
include "admin_header.php";
?>
<form action="add_semster_action.php" method="post">
    <table border="1" align="center">
        <tr>
            <th colspan="2">Add Semester</th>
        </tr>
        <tr>
            <th>Enter Semester</th>
            <th>
                <input type="number" name="sem" required>
            </th>

        </tr>

        <tr>
            <th>Select Course</th>
            <th>
                <select name="course" required>
                <option value="">-----Select-----</option>
                    <?php
                    include "connection.php";
                    $query="select * from admin_courses";
                    $res=mysqli_query($conn,$query);
                    while($row=mysqli_fetch_array($res))
                    { ?>
                        <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                   <?php }
                    ?>
                </select>
            </th>

        </tr>
        <tr>
            <th>
                <?php
                if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                {
                    echo "<span style='color:red;'>Semester Already exists</span>";
                }
                ?>
            </th>
            <th>
                <input type="submit" value="SUBMIT">
            </th>
        </tr>
    </table>
</form>