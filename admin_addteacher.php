<head>
    <script src="lib/jquery.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script src="ui/jquery_ui.js"></script>
    <script src="jquery-1.11.1.js"></script>
    <script src="ui/jquery_ui.css"></script>
    <script>
        $(document).ready(function()
        {
           //  alert ("its working baby");
            $("#form3").validate();
          //  $("#text").datepicker();
        }
        )
    </script>

    <?php
include "admin_header.php";
include "connection.php";
$query="select max(teacher_id) from teacher";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$id=$row[0];
//echo $id;
$tid=1000;
if(mysqli_num_rows($res))
{
    $id=$id+1;
    $tid=$id;
}
else
{
    $tid=$id;
}
?>
<div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<form id="form3" action="admin_insertteacher.php" method="post" enctype="multipart/form-data">
    <table  align='center'>
<br><br>
        <tr>
            <td>Enter teacher ID</td>
            <td><input type="text" name="teacherid" readonly value="<?php echo  $tid; ?>" data-rule-required="true" data-msg-required="*"></td>
        </tr>
        <tr>
            <td>Enter teacher name</td>
            <td><input type="text" name="teachername"data-rule-required="true" data-msg-required="*" data-rule-minlength="3"></td>
        </tr>
        <tr>
            <td>Enter date of birth</td>
            <td><input type="date" id="text" name="dob" data-rule-required="true" data-msg-required="*" ></td>
        </tr>
        <tr>
            <td>Enter father name</td>
            <td><input type="text" name="fathername" data-rule-required="true" data-msg-required="*" data-rule-minlength="3"></td>
        </tr>
        <tr>
            <td>Enter mother name</td>
            <td><input type="text" name="mothername"data-rule-required="true" data-msg-required="*" data-rule-minlength="3"></td>
        </tr>
        <tr>
            <td>Upload photo</td>
            <td><input type="file" name="teacherphoto" data-rule-required="true" data-msg-required="*"></td>
        </tr>
        <tr>
            <td>Enter address</td>
            <td><textarea rows="4" cols="22"name="address"data-rule-required="true" data-msg-required="*"></textarea></td>
        </tr>
        <tr>
            <td>Enter email</td>
            <td><input type="email" name="email" data-rule-required="true" data-msg-required="*" data-rule-email="true"></td>
        </tr>

        <tr>
            <td>Enter Contact No.</td>
            <td><input type="number" name="cno" data-rule-required="true" data-msg-required="*" data-rule-maxlength="10"></td>
        </tr>
        <tr>
            <td>Enter password</td>
            <td><input type="password" name="password" data-rule-required="true" data-msg-required="*" ></td>
        </tr>
        <tr>
            <td>Enter confirm password</td>
            <td><input type="password" name="cpassword"data-rule-required="true" data-msg-required="*"></td>
        </tr>
        <tr>
            <td>Select status</td>
            <td>
                <select name="status" data-rule-required="true" data-msg-required="*">
                    <option value="">--select--</option>
                    <option value="unmarried">Unmarried</option>
                    <option value="married">Married</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Enter designation</td>
            <td>
                <select name="designation" data-rulerequired="true" data-msg-required="*">
                    <option value="">--select--</option>
                    <option value="lecturer">Lecturer</option>
                    <option value="professor">Professor</option>
                    <option value="associate professor">Associate Professor</option>
                    <option value="assistant professor">Assistant Professor</option>


                </select>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                {
                    echo "<span style='color:red;'>Email Id already exists</span>";
                }
                elseif(isset($_REQUEST['q']) && $_REQUEST['q']==3)
                {
                    echo "<span style='color:red;'>Select images files only</span>";
                }
                elseif(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                {
                    echo "<span style='color:red;'>Password and Confirm Password should be same</span>";
                }
                else{}
                ?>
            </td>
            <td><input type="submit"value="Submit"></td>
        </tr>

    </table>

</form>
    </div>