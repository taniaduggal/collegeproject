<?php
include "connection.php";
$session=$_REQUEST['session'];
$year=$_REQUEST['year'];
$course=$_REQUEST['course'];
?>
<table align='center'>
    <tr>
        <th>  Choose Semester</th>
        <th>
            <select name="sem" id="sem" onchange="go3()">
                <option value="">--Select--</option>
                <?php
                $query_sem="select * from semester where courses='".$course."'";
                $res_sem=mysqli_query($conn,$query_sem);
                //$row_count=0;
                while($row_sem=mysqli_fetch_array($res_sem))
                {
                    if($session=="july-dec")
                    {
                        if($row_sem[1]=="Sem1" || $row_sem[1]=="Sem3" || $row_sem[1]=="Sem5" || $row_sem[1]=="Sem7")
                        {


                            ?>

                            <option value="<?php echo $row_sem[0]?>"><?php echo $row_sem[1];?></option>






                        <?php
                        }
                    }


                    else
                    {
                        if($row_sem[1]=="Sem2" || $row_sem[1]=="Sem4" || $row_sem[1]=="Sem6" || $row_sem[1]=="Sem8")
                        {
                            ?>
                            <option value="<?php echo $row_sem[0] ?>"><?php echo $row_sem[1];?></option>



                        <?php
                        }
                    }
                    ?>


                <?php
                }
                ?>
            </select></th>
    </tr>
</table>

<input type="hidden" id="course" value="<?php echo $course ?>">
<input type="hidden" id="sess" value="<?php echo $session ?>">
<input type="hidden" id="year" value="<?php echo $year ?>">




