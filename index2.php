
<?php
include "public_header.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="test_smtp_gmail_basic_student.php" method="post">
    <table align='center'>
        <tr>
            <td>Email To :</td>
            <td><input type="text" name="to" required style="width: 250px;"> </td>
        </tr>
        <tr>
            <td>Subject :</td>
            <td><input type="text" name="subject"  style="width: 250px;"> </td>
        </tr>
        <tr>
            <td>Message Body :</td>
            <td><textarea rows="5" cols="33" name="body" ></textarea> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="SENT"> </td>
        </tr>
    </table>
</form>
</body>
</html>