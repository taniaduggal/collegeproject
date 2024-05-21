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
include "admin_header.php";
include "connection.php";
/*$query="select max(teacher_id) from teacher";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$id=$row[0];
//echo $id;
$tid=1000;
if(mysqli_num_rows($res))
{
    $id=$id+1;
    $tid=$id;
}
else
{
    $tid=$id;
}*/
?>
<head>
    <style type="text/css">
    form table td table tr td input
    {
        width: 250px;
        height: 50px;
    }
    </style>
</head>

<form action="admin_insert_student.php" method="post" enctype="multipart/form-data">
    <table width="1000px" cellspacing="10" cellpadding="10"align="center">

        <tr>
            <td>Enter Student ID</td>
            <td><input type="text" name="student_id" required></td>
            <td>Enter email</td>
            <td><input type="email" name="email" required></td>

        </tr>
        <tr>
            <td>Enter University Roll NO.</td>
            <td><input type="text" name="university_rollno"required></td>
            <td>Upload photo</td>
            <td><input type="file" name="photo" required></td>

        </tr>
        <tr>
            <td>Enter Name</td>
            <td><input tyope="text" name="name" required></td>
            <td>Enter Contact No.</td>
            <td><input type="number" name="cno" required></td>

            </tr>
        <tr>
            <td>Enter father name</td>
            <td><input type="text" name="father_name"required></td>
            <td>Enter Parent's Contact No.</td>
            <td><input type="number" name="pno" required></td>
        </tr>
        <tr>
            <td>Enter mother name</td>
            <td><input type="text" name="mother_name"required></td>
            <td>Enter password</td>
            <td><input type="password" name="password"required></td>

        </tr>
        <tr>
            <td>Enter permanent address</td>
            <td><textarea rows="4" cols="22"name="p_address"required></textarea></td>
            <td>Enter gender</td>
            <td>
                <select name="gender" required>
                    <option value="">--select--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
        </tr>
        <tr>
            <td>Enter correspondance address</td>
            <td><textarea rows="4" cols="22"name="c_address"required></textarea></td>
            <td>Select status</td>
            <td>
                <select name="status" required>
                    <option value="">--select--</option>
                    <option value="unmarried">Unmarried</option>
                    <option value="married">Married</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Select Quota</td>
            <td>
                <select name="quota" required>
                    <option value="">--select--</option>
                    <option value="general">General</option>
                    <option value="sc">SC/ST</option>
                    <option value="obc">OBC</option>
                </select>
            </td>
            <td>Select Admission Through</td>
            <td>
                <select name="add_through" required>
                    <option value="">--select--</option>
                    <option value="iitjee">IITJEE</option>
                    <option value="selffinance">Self-finance</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Enter JEE rank</td>
            <td><input type="text" name="jeerank"required></td>
            <td>Enter Course</td>
            <td><select name="course" id="coursename" required onchange="go1()">
                    <option value="">--Select--</option>
                    <?php
                    $coursename=[0];
                    $query="select * from admin_courses";
                    $res_course=mysqli_query($conn,$query);
                    while($row5=mysqli_fetch_array($res_course))
                    {
                        ?>
                        <option value="<?php echo $row5[0]; ?>"><?php echo $row5[0]; ?></option>
                    <?php


                    }
                    ?>
                </select></td>


        </tr>
        <tr>
            <td>Enter JEE score</td>
            <td><input type="text" name="jeescore"required></td>
            <td id="get_sem"> </td>
        </tr>
        <tr>
            <td>Enter date of birth</td>
            <td><input type="date" name="dob" reequired</td>
        </tr>

        <tr>
            <td>Enter admission year </td>
            <td><input type="date" name="year" reequired</td>
        </tr>


        <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
            <td colspan="4" align="center">
                <table border="1" width="1000px">
                    <tr>
                        <th colspan="5">ACADEMIC DETAILS</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>School/College</th>
                        <th>Board/University</th>
                        <th>Completion Year</th>
                        <th>Marks/CGPA</th>
                    </tr>
                    <tr>
                        <th>10<sup>th</sup></th>
                        <td><input type="text" name="schoolname"required></td>
                        <td><input type="text" name="tenthboard"required></td>
                        <td><input type="text" name="tenthsession"required></td>
                        <td><input type="text" name="tenthmarks"required></td>
                    </tr>
                    <tr>
                        <th>12<sup>th</sup></th>
                        <td><input type="text" name="school12name"required></td>
                        <td><input type="text" name="12board"required></td>
                        <td><input type="text" name="12session"required></td>
                        <td><input type="text" name="12marks"required></td>
                    </tr>
                    <tr>
                        <th>Graduation</th>
                        <td><input type="text" name="gradname"> </td>
                        <td><input type="text" name="grad_board"> </td>
                        <td><input type="number" name="grad_year"> </td>
                        <td><input type="number" name="grad_marks"> </td>
                    </tr>
                    <tr>
                        <th>Post graduation</th>
                        <td><input type="text" name="pgradname"> </td>
                        <td><input type="text" name="pgrad_board"> </td>
                        <td><input type="number" name="pgrad_year"> </td>
                        <td><input type="number" name="pgrad_marks"> </td>
                    </tr>

                    </table>
            </td>
        <tr>

            <td colspan="4" align="center"><input type="submit" style="width: 100px;height: 50px;" value="Submit"></td>
        </tr>
    </table>
</form>