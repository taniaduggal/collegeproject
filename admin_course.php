<?php
include "admin_header.php";
?>
<div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<form action="admin_insert_course.php"method="post">
    <table align='center'>
     <br><br>   <th colspan="2"><h3><span style='color: black;'>ADD NEW COURSE</span></h3></th>
            <tr>
                <td>Enter course name</td>
                <td><input type="text" name="coursename"></td>
            </tr>
            <tr>
                <td>Enter description</td>
                <td><textarea rows="4" cols="22"name="description"></textarea>
            </tr>
            <tr>
                <td>Select course type</td>
                <td>
                    <select name="coursetype" required>
                        <option value="">--select--</option>
                        <option value="UG">UG</option>
                        <option value="PG">PG</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Select duration</td>
                <td>
                    <select name="duration" required>
                        <option value="">--select--</option>
                        <option value="6months">6months</option>
                        <option value="1years">1years</option>
                        <option value="2years">2years</option>
                        <option value="3years">3years</option>
                        <option value="4years">4years</option>
                        <option value="5years">5years</option>
                        <option value="5.5years">5years and 6months</option>
                    </select>
                </td>
            </tr>
            <tr></tr><tr></tr>
            <tr>
                <td></td>
                <td><input type="submit"value="Submit"></td>
            </tr>
            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr>
            <tr>
                <td>*UG= UnderGraduate</td>
             </tr>
             <tr>
                <td>**PG= PostGraduate</td>
            </tr>


    </table>
</form>
    </div>