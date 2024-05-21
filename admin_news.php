<?php
include "admin_header.php";
include "connection.php";
?>
<div style="background-image: url('img/blur10.jpg');height:500px ;background-size: 100%;background-repeat: no-repeat">
<form action="admin_insertnews.php" method="post" >
    <table align='center'>
        <br><br>

        <tr>

            <td>Title</td>
            <td><input type="text" name="title" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea rows="4" cols="22"name="description" required></textarea></td>
        </tr>
        <tr>
        <td>
        </td>

            <td><input type="submit"value="Submit"></td>
        </tr>

    </table>

</form>
    </div>