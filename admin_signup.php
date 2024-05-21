<?php
include "admin_header.php ";
?>
<div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<form action="admin_insert_admin.php" method="post">
    <table align='center'>
<br><br>        <th colspan="2"><h3><span style="color: black"> Create New Admin</span></h3></th>
        <tr>
            <td>Enter email</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Enter password</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td>Confirm password</td>
            <td><input type="password" name="cpass"></td>
        </tr>
        <tr>
            <td>Select user type</td>
            <td>
                <select name="type" required>
                    <option value="">--select--</option>
                    <option value="Admin">Admin</option>
                    <option value="Limited_user">Limited user</option>
                    <option value="Power_user">Power user</option>
                </select>
            </td>
        </tr>


        <tr>
            <th>
                <?php
                if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                {
                    echo "<span style='color:red;'>Email Already Exists</span>";
                }
                elseif(isset($_REQUEST['q']) && $_REQUEST['q']==2)
                {
                    echo "<span style='color:red;'>Password and Confirm Password should be same</span>";
                }
                ?>
            </th>

            <td> <input type="submit"value="Submit"></td>
        </tr>


    </table>
</form>
</div>