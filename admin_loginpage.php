<?php
include "public_header.php";
?>
<div style="background-image: url('img/blur5.jpg');padding: 40px;height: 500px;background-size: 100%;background-repeat: no-repeat">
<form action="admin_validate_login.php"method="post">
    <table  align="center">
        <th colspan="2"><h3><span style='color: black;'>Log In</span></h3></th>
        <tr>
            <td>Enter email</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td>Enter password</td>
            <td><input type="password" name="pass" required></td>
        </tr>
        <tr>
            <td>Select User Type</td>
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
          <td>
              <?php
              if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
              {
                  echo "<span style='color:red;'>Incorrect Email Id or Password</span>";
              }
              else
              {
                 // echo "hgjj";
              }
              ?>
          </td>
          <td><input type="submit" value="Log in"></td>
          <td><a href='index3.php'><span style='color: black;'>Forgot Password ? </span></a></td>

        </tr>

    </table>
 </form>
    </div>