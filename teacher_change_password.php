<?php
include "teacher_header.php";
?>
<div style="background-image: url('img/blur8.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<form action="teacher_changepassword_action.php" method="post">
    <table align='center'>
<br><br><br><br>        <tr>
            <td>
                Enter email/Mobile No
            </td>
            <td><input type="text" name="email" value="<?php echo $_SESSION['teacher']; ?>" readonly></td>
        </tr>
        <tr>
            <td>
                Enter old password
            </td>
            <td><input type="password" name="oldpassword" required></td>
        </tr>
        <tr>
            <td>Enter new password</td>
            <td><input type="password" name="newpassword" required></td>
        </tr>
        <tr>
            <td>
                Confirm password
            </td>
            <td>
                <input type="password" name="confirmpassword" required>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                {
                    echo "<span style='color:red;'>Password and Confirm Password not matched</span>";
                }
                elseif(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                {
                    echo "<span style='color:red;'>Email/Phone no. or Old Password not matched</span>";
                }
                ?>
            </td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
</div>