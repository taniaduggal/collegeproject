<?php
$id=$_REQUEST['q'];
//echo $id;
include "connection.php";
$query="select * from teacher_grade where id='".$id."'";
//echo $query1;
$res3=mysqli_query($conn,$query);
$row2=mysqli_fetch_array($res3);

?>
<form action="teacher_edit_grade_action.php" method="post">
    <table border="1">
        <tr>
            <th colspan="2">
                <h1>EDIT GRADES </h1>
            </th>
        </tr>

        <tr>
            <th>Enter grade:</th>
            <th>
                <input type="text" name="grade" readonly value="<?php echo $row2[1]?>">
            </th>
        </tr>

        <tr>
            <th>Enter gradepoint:</th>
            <th>
                <input type="text" name="grade_point" readonly value="<?php echo $row2[2]?>">
            </th>
        </tr>
        <tr>
            <th>
                Enter marks
            </th>
            <th>
                <input type="text" name="marks" value="<?php echo $row2[3]?>">
            </th>
        </tr>
        <tr>
            <th>
                Enter percentage
            </th>
            <th>
                <input type="text" name="percentage" value="<?php echo $row2[5]?>">
            </th>
        </tr>

        <tr>
        <th></th>
        <th><input type="submit" value="EDIT GRADES"</th>
        </tr>
    </table>

</form>