<html xmlns="http://www.w3.org/1999/html">
<head>

    <style type="text/css">
        #h1
        {
            width:1400px;
            height:600px;
        }


    </style>


</head>
<body style="background-image:url("img/blurr.jpg")">

<?php
include "public_header.php";
?>
<div style="background-image: url('img/blur4.jpg');height: 500px;background-size: 100%;background-repeat: no-repeat">
<form action="teacher_validate_login.php" style="h1" method="post">
    <table  cellspacing="10" cellspacing="10" align="center">
        <br><br><br>
        <th colspan="3"><h3><span style='color: honeydew;'>Log In</span></h3></th>
        <tr>
            <td><span style='color: honeydew;'>Enter email / Mobile No:</span></td>
            <td><input type="text" name="email_no" required></td>
        </tr>
        <tr>
            <td><span style='color: honeydew;'>Enter password:</span></td>
            <td><input type="password" name="pass" required></td>
        </tr>

        <tr>
            <td>
                <?php
                if(isset($_REQUEST['q']) && $_REQUEST['q']==1)
                {
                    echo "<span style='color:red;'>Incorrect Email Id/Mobile No. or Password</span>";
                }
                else
                {

                }
                ?>
            </td>
            <td><input type="submit" value="Log in"></td>
            <td><a href='index1.php'><span style='color: honeydew;'>Forgot Password ? </span></a></td>

        </tr>

    </table>
</form>
</div>
</body>
</html>