<?php include "admin_header.php" ?>
<head>
    <script type="text/javascript">
        var xmlhttp;
        var coursename;
        function go1()
        {
            try
            {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");// For Old Microsoft Browsers
            }
            catch (e)
            {
                try
                {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");  // For Microsoft IE 6.0+
                }
                catch (e2)
                {
                    xmlhttp = new XMLHttpRequest();        //For Mozilla, Opera Browsers
                }
            }

            coursename = document.getElementById("coursename").value;

            xmlhttp.onreadystatechange=go2;
            xmlhttp.open("GET","getsemesters.php?q="+coursename,true);
            xmlhttp.send();
        }
        function go2()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("get_sem").innerHTML=xmlhttp.responseText;
            }
        }
    </script>

</head>

<?php
$subject_code=$_REQUEST['q'];
include "connection.php";
$query16="select * from subjects where subject_code='".$subject_code."'";
$res_subject=mysqli_query($conn,$query16);
$row6=mysqli_fetch_array($res_subject);
?>
<form action="admin_edit_subject_action.php" method="post">
    <table border="1">
        <tr>
            <th colspan="2">
                <h1>EDIT SUBJECTS </h1>
            </th>
        </tr>
        <tr>
            <th>
                 Subject Code
            </th>
            <th>
                <input type="text" name="subjectcode"readonly value="<?php echo $row6[0]?>" required>
            </th>
        </tr>
        <tr>
            <th>Enter Subject Name:</th>
            <th>
                <input type="text" name="subjectname" value="<?php echo $row6[1]?>"required>
            </th>
        </tr>
        <tr>
            <th colspan="2">Selected Course : <?php echo $row6[6] ?>
            <br>
            Selected Semester : <?php $select="select semester_name from semester where sem_id=".$row6[7];
                $res=mysqli_query($conn,$select);
                $row=mysqli_fetch_array($res);
                echo $row[0];
                ?>
            </th>
        </tr>
        <tr>

            <th>Select course name</th>
            <th><select name="coursename" id="coursename" onchange="go1()">
                    <option value="">--Select--</option>
                    <?php
                    $coursename=$row[0];
                    $query13="select * from admin_courses";
                    $res_course=mysqli_query($conn,$query13);
                    while($row5=mysqli_fetch_array($res_course))
                    {
                        ?>
                        <option value="<?php echo $row5[0]; ?>"><?php echo $row5[0]; ?></option>
                    <?php


                    }
                    ?>
                </select></th>
        </tr>

        <tr id="get_sem">

        </tr>

        <tr>
            <th>Enter Marks of first minor:</th>
            <th><input type="text" name="firstminormarks" required value="<?php echo $row6[2]?>"</th>
        </tr>
        <tr>
        <th>Enter Marks of second minor:</th>
        <th><input type="text" name="secondminormarks" required value="<?php echo $row6[3]?>"></th>
        </tr>
        <tr>
            <th>Enter marks of quiz:</th>
            <th><input type="text" name="quiz" required value="<?php echo $row6[4]?>"></th>
        </tr>
        <tr>
            <th>Enter marks of major:</th>
            <th><input type="text" name="major" required value="<?php echo $row6[5]?>"></th>
        </tr>
        <tr>
            <th></th>
            <th><input type="submit" value="EDIT COURSE" required</th>
        </tr>
    </table>

</form>