<?php
$sr_no=$_REQUEST['q'];
//echo $sr_no;
include "connection.php";
$query1="select * from grade_point where sr_no='".$sr_no."'";
//echo $query1;
$res3=mysqli_query($conn,$query1);
$row3=mysqli_fetch_array($res3);
include "admin_header.php";
?>
<form action="admin_edit_grade_action.php" method="post">
    <table border="1">
        <tr>
            <th colspan="2">
                <h1>EDIT GRADES </h1>
            </th>
        </tr>
        <tr>
            <th>
                Enter marks
            </th>
            <th>
                <input type="text" name="marks" value="<?php echo $row3[1]?>">
            </th>
        </tr>
        <tr>
            <th>Enter grade:</th>
            <th>
                <input type="text" name="grade" readonly value="<?php echo $row3[2]?>">
            </th>
        </tr>
        <tr>
            <th>Enter gradepoint:</th>
            <th>
                <input type="text" name="grade_point" value="<?php echo $row3[3]?>">
            </th>
        </tr>
            <th></th>
            <th><input type="submit" value="EDIT GRADES"</th>
        </tr>
    </table>

</form>