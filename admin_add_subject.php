<head>
    <script src="lib/jquery.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function()
        {
            //alert ("its workin baeby");
            $("#form2").validate();
        })
    </script>

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
           // alert(coursename);
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
include "connection.php";
include "admin_header.php";
?>
<div style="background-image: url('img/blur10.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<form id="form2" action="insert_subject.php"method="post">
<table align='center'>
    <br><br>
        <th colspan="2"><h3><span style='color: black;'>ADD NEW SUBJECT</span></h3></th>
    <tr>
        <td>Enter course name</td>
        <td><select name="coursename" style="width: 175px;" id="coursename" data-rule-required="true" data-msg-required="*" onchange="go1()">
                <option value="">----Select----</option>
                <?php
                $coursename=[0
				];
                $query13="select * from admin_courses";
                $res_course=mysqli_query($conn,$query13);
                while($row5=mysqli_fetch_array($res_course))
                {
                    ?>
                    <option value="<?php echo $row5[0]; ?>"><?php echo $row5[0]; ?></option>
                <?php


                }
                ?>
            </select></td>
    </tr>
    <tr id="get_sem">

    </tr>
        <tr>
             <td>Enter subject code</td>
                <td><input type="text" name="text1" data-rule-required="true" data-msg-required="*"></td>
        </tr>
             <tr>
                 <td>Enter subject name</td>
                 <td><input type="text" name="text2"data-rule-required="true" data-msg-required="*"></td>
              </tr>

    <tr>
        <td>Enter subject credits</td>
        <td><input type="text" name="credits"data-rule-required="true" data-msg-required="*"></td>
    </tr>


    <tr>
        <td>Enter total marks of first minor</td>
        <td><input type="text" name="text3"data-rule-required="true" data-msg-required="*" value="20"></td>
    </tr>
    <tr>
        <td>Enter total marks of second minor</td>
        <td><input type="text" name="text4"data-rule-required="true" data-msg-required="*" value="20"></td>
    </tr>
    <tr>
        <td>Enter total marks of quiz</td>
        <td><input type="text" name="text5" data-rule-required="true" data-msg-required="*" value="10"></td>
    </tr>
    <tr>
        <td>Enter total marks of major</td>
        <td><input type="text" name="text6" data-rule-required="true" data-msg-required="*" value="50"></td>
    </tr>
    <tr>
        <td><?php if(isset($_REQUEST['q'])&&$_REQUEST['q']==5)
            {echo"<span style='color:red'>SUBJECT ALREADY EXISTS</span>";}?></td>
        <td><input type="submit" name="submit"></td>
    </tr>
 </table>
</form>
    </div>