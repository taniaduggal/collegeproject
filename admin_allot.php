<head>
    <script type="text/javascript">
        function go()
        {
            var session=document.getElementById("sess").value;

            if(session=="Jan-June")
            {
                document.getElementById("jan").style.display="block";
            }
            else
            {
                document.getElementById("july").style.display="block";
            }
        }
        var subjects="";
        function get_subjects(chk)
        {

            var val=chk.value;
            var sub=document.getElementById("allot_subject").value;
            if(chk.checked==true)
            {
                subjects+=val+",";
            }
            else
            {
              subjects=sub.replace(val+",","");
            }
            document.getElementById("allot_subject").value=subjects;
        }
    </script>
</head>
<body onload="go()">
<?php
include "connection.php";
$tid=$_REQUEST['id'];
$session=$_REQUEST['s'];
$year=$_REQUEST['y'];
include "admin_header.php";
?>
<form action="admin_allot_action.php" method="post">

    <input type="hidden" value="<?php echo $session ?>" id="sess" name="sess">
    <input type="hidden" value="<?php echo $tid ?>" name="teacher">
    <input type="hidden" value="<?php echo $year ?>" name="year">
    <table align="center">
        <tr>
            <th><h2>ASSIGN SUBJECTS</h2></th>
        </tr>
        <tr><th>
    <table align="center" cellpadding="10" cellspacing="10" border="1" id="jan" style="display: none;
    border: 2px black double;">


            <?php

                $query13="select * from admin_courses";
                $res_course=mysqli_query($conn,$query13);
                while($row5=mysqli_fetch_array($res_course))
                {
                    ?>
                        <th><u style="font-size: x-large;">Course : <?php echo $row5[0] ?></u><br>
                            <?php
                            $query_sem="select * from semester where courses='".$row5[0]."'";
                            $res_sem=mysqli_query($conn,$query_sem);
                            $row_count=0;
                            ?>
                            <table>
                            <?php
                            while($row_sem=mysqli_fetch_array($res_sem))
                            { ?><tr>
                                <?php
                                    if($row_sem[1]=="Sem2" || $row_sem[1]=="Sem4" || $row_sem[1]=="Sem6" || $row_sem[1]=="Sem8")
                                    {


                                ?>
                                <th><?php echo $row_sem[1] ?>
                                <table style="border: 2px black groove; width: 300px;" cellspacing="10" >
                                    <?php $query_sub="select * from subjects where coursename='".$row5[0]."' && semester=".$row_sem[0];
                                    $res_sub=mysqli_query($conn,$query_sub);
                                    while($row_sub=mysqli_fetch_array($res_sub))
                                    { ?>
                                        <tr>
                                            <td><input type="checkbox" onclick="get_subjects(this)" value="<?php echo $row_sub[0] ?>" id="<?php echo $row_sub[1] ?>" name="<?php echo $row_sub[0] ?>"><?php echo strtoupper($row_sub[1])." ( ".$row_sub[0]." )" ?></td>
                                        </tr>
                                   <?php }
                                    ?>

                                </table>
                                </th>
                          <?php  $row_count++;?>
                          <?php     }


                            }
                            ?>
                                </table>
                        </th>

                <?php


                }
                ?>

</tr>


</table>

    <table align="center" cellpadding="10" cellspacing="10" border="1" id="july" style="display: none;  border: 2px black double;">
        <tr>

            <?php

            $query13="select * from admin_courses";
            $res_course=mysqli_query($conn,$query13);
            while($row5=mysqli_fetch_array($res_course))
            {
                ?>
                <th><u style="font-size: x-large;">Course : <?php echo $row5[0] ?></u><br>
                    <?php
                    $query_sem="select * from semester where courses='".$row5[0]."'";
                    $res_sem=mysqli_query($conn,$query_sem);
                    $row_count=0;
                    ?>
                    <table>
                        <?php
                        while($row_sem=mysqli_fetch_array($res_sem))
                        { ?><tr>
                            <?php
                            if($row_sem[1]=="Sem1" || $row_sem[1]=="Sem3" || $row_sem[1]=="Sem5" || $row_sem[1]=="Sem7")
                            {


                                ?>
                                <th><?php echo $row_sem[1] ?>
                                    <table style="border: 2px black groove; width: 300px;" cellspacing="10" >
                                        <?php $query_sub="select * from subjects where coursename='".$row5[0]."' && semester=".$row_sem[0];
                                        $res_sub=mysqli_query($conn,$query_sub);
                                        while($row_sub=mysqli_fetch_array($res_sub))
                                        {

                                            ?>
                                            <tr>
                                                <td><input type="checkbox" onclick="get_subjects(this)" value="<?php echo $row_sub[0] ?>" id="<?php echo $row_sub[1] ?>" name="<?php echo $row_sub[0] ?>"><?php echo strtoupper($row_sub[1])." ( ".$row_sub[0]." )" ?> </td>
                                            </tr>
                                        <?php }
                                        ?>

                                    </table>
                                </th>
                                <?php  $row_count++;?>
                            <?php     }


                        }
                        ?>
                    </table>
                </th>

            <?php


            }
            ?>

        </tr>


    </table>
    <input type="hidden" id="allot_subject" name="allot_subject">


            </th></tr>
        <tr>
            <td align="right">
                <input type="submit" style="margin-right: 8px;height: 50px;width: 80px;" value="ALLOT">
            </td>
        </tr>
    </table>
</form>
</body>