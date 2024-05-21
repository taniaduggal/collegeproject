<?php
$teacher_id=$_REQUEST['q'];
 include "connection.php";
$query7="select * from teacher where teacher_id='".$teacher_id."'";
$res3=mysqli_query($conn,$query7);
$row3=mysqli_fetch_array($res3);
?>
<?php include "admin_header.php" ?>
<form action="admin_edit_teacher_action.php" method="post" enctype="multipart/form-data">

    <center><span style='font-size: xx-large'>EDIT TEACHER</span></center><br>
    <table align='center' border="1">

        <tr>


            </th>
        </tr>
        <tr>
            <th>
                 Teacher Id
            </th>
            <th>
                <input type="text" name="teacherid" readonly value="<?php echo $row3[0]?>"required>
            </th>
        </tr>
        <tr>
            <th>Enter Teacher Name:</th>
            <th>
                <input type="text" name="teachername" required value="<?php echo $row3[1]?>">
            </th>
        </tr>
        <tr>
            <th>Enter Father Name:</th>
            <th>
                <input type="text" name="fathername" required value="<?php echo $row3[2]?>">
            </th>
        </tr>
        <tr>
            <th>Enter Mother Name:</th>
            <th>
                <input type="text" name="mothername" required value="<?php echo $row3[3]?>">
            </th>
        </tr>
        <tr>
            <th>Enter Photo:</th>
            <th>

                <img src="<?php echo $row3[4]?>" height="100" width="100"><input type="file" name="teacherphoto" required >
            </th>
        </tr>
        <tr>
            <th>Enter Address:</th>
            <th>
                <textarea rows="5" cols="25" name="address"><?php echo $row3[5]?></textarea>
            </th>
        </tr>
        <tr>
            <th>Enter Email:</th>
            <th>
                <input type="email" name="email" required value="<?php echo $row3[6]?>">
            </th>
        </tr>

        <tr>
            <th>Enter Status:</th>
            <th>
                <input type="text" name="status" required value="<?php echo $row3[8]?>">
            </th>
        </tr>
        <tr>
            <th>Enter designation</th>
            <td>

                <select name="designation" required >
                    <?php
                    if($row3[9]=="lecturer")
                    { ?>
                        <option value="lecturer" selected>lecturer</option>
                        <option value="assistantprofessor">assistant professor</option>
                        <option value="associateprofessor">associate professor</option>
                        <option value="professor">professor</option>
               <?php     }
                    else if($row3[9]=="assistantprofessor")
                    {
                    ?>
                    <option value="lecturer" >lecturer</option>
                    <option value="assistantprofessor" selected>assistant professor</option>
                    <option value="associateprofessor">associate professor</option>
                    <option value="professor">professor</option>

                  <?php  }
                    else if($row3[9]=="associateprofessor")
                    {
                    ?>
                    <option value="lecturer" >lecturer</option>
                    <option value="assistantprofessor" >assistant professor</option>
                    <option value="associateprofessor" selected>associate professor</option>
                    <option value="professor">professor</option>

                   <?php }
                    else
                    {
                    ?>
                    <option value="lecturer" >lecturer</option>
                    <option value="assistantprofessor" >assistant professor</option>
                    <option value="associateprofessor" >associate professor</option>
                    <option value="professor" selected>professor</option>
                   <?php  }                     ?>

                </select>
            </td>
        </tr>
        <tr>
            <th>Enter contact number</th>
            <th><input type="text" name="contactnumber" required value="<?php echo $row3[10]?>"> </th>
        </tr>

        <tr>
            <th></th>
            <th><input type="submit" value="EDIT TEACHER"</th>
        </tr>
    </table>

</form>