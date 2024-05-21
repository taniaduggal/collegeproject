<?php
include "public_header.php";
?>
<div style="background-image: url('img/blur1.jpg');padding: 40px;height: 500px;background-size: 100%;background-repeat: no-repeat">
<form action="student_validate_login.php"method="post">
    <table  align="center">
        <th colspan="2"><h3><span style='color: honeydew;'>Log In</span></h3></th>
        <tr>
            <td><span style='color: honeydew;'>Enter email</span></td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td><span style='color: honeydew;'>Enter password</span></td>
            <td><input type="password" name="pass" required></td>
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
                    // echo "hii";
                }
                ?>
            </td>
            <td><input type="submit" value="Log in"></td>
             <td><a href='index2.php'><span style='color: honeydew;'>Forgot Password ? </span></a></td>

         </tr>

    </table>
</form>
</div>