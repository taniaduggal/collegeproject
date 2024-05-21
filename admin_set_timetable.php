<?php include "admin_header.php"; ?>

<form action="admin_set_timetable.php" method="post">

<table align="center">
    <br><br>
    <tr>
    <th colspan="2">
        <h2>Set time table</h2>
    </th>
    </tr>
    <tr>
        <th>Select session</th>
        <th>
            <select name="session" required>
                <option value="">--select--</option>
                <option value="Jan-June">Jan-June</option>
                <option value="July-December">July-December</option>
                </select>
        </th >
    </tr>
    <tr>
        <th>
            Select Year
        </th>
        <th>
            <select name="year" required>
                <option value="">--select--</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
            </select>
        </th>
    </tr>
    <tr>
        <th>
            Enter Teacher Id
        </th>
        <th>
            <select name="teacher" required>
                <option value="">---Select---</option>
            <?php
            include "connection.php";
            $select_teacher="select * from teacher";
            $res_teacher=mysqli_query($conn,$select_teacher);
            while($row_teacher=mysqli_fetch_array($res_teacher))
            { ?>
              <option value="<?php echo $row_teacher[0] ?>"><?php echo $row_teacher[1] ?> ( <?php echo $row_teacher[0] ?> ) </option>
      <?php }
            ?>
            </select>
        </th>
    </tr>
    <tr>
        <th></th>
        <th>
            <input type="submit" name="btn" value="GO">
        </th>
    </tr>
</table>

</form>
<?php
if(isset($_REQUEST['btn']))
{

    include "connection.php";
    $teacherid=$_REQUEST['teacher'];
    $session=$_REQUEST['session'];
    $year=$_REQUEST['year'];
    $q="select * from teacher where teacher_id='".$teacherid."'";
    $res=mysqli_query($conn,$q);
    $row=mysqli_fetch_array($res);
    ?>
<table border="1" align="center">
    <tr>
        <th colspan="2"> <h2>Teacher's Info. for Teacher Id: <?php echo $teacherid ?></h2></th>
    </tr>
    <tr>
        <th><img src="<?php echo $row[4] ?>" height="300px" width="200px"> </th>
    <td>
    <b>Teacher's Name :</b><?php echo $row[1] ?><br>
    <b>Email Id :</b><?php echo $row[6] ?><br>
    <b>Designation :</b><?php echo $row[9] ?><br>
    <b>Contact No :</b>+91 <?php echo $row[10] ?><br>
    <b>Marital Status :</b><?php echo $row[8] ?>

    </td>
    </tr>
    <tr>
        <td></td>
        <th>
            <a href="admin_allot.php?id=<?php echo $teacherid ?>&s=<?php echo $session ?>&y=<?php echo $year ?>"> <span style='color: black;'><input type="button" value="Allot Load"></span></a>
        </th>
    </tr>
</table>

<?php
}
?>
