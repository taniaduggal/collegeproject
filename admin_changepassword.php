<?php
include "admin_header.php";
?>
<div style="background-image: url('img/blur10.jpg');height:500px ;background-size: 100%;background-repeat: no-repeat">
<form action="admin_changepassword_action.php" method="post">
    <table align='center'>
        <br><br>
        <tr>
            <td>
            Enter email
            </td>
            <td><input type="email" name="email" required></td>
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
            <td></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </table>
</form>
</div>