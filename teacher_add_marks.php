<!doctype>
<html>
</html>
<?php
include "teacher_header.php";
?>
<html
<head>


    <script type="text/javascript">
        function go1(txt,type)
        {
            if(type == "minor1" || type=="minor2")
            {
                var val=txt.value;
                if(val>20)
                {
                    alert("Marks cant exceed 20");
                    txtid=txt.id;

                    document.getElementById(txtid).value="";
                    document.getElementById(txtid).focus();
                }

            }
            else if(type=="quiz")
            {
                var val=txt.value;
                if(val>10)
                {
                    alert("Marks cant exceed 10");
                    txtid=txt.id;
                    document.getElementById(txtid).value="";
                    document.getElementById(txtid).focus();
                }
            }
            else if(type=="major")
            {
                var val=txt.value;
                if(val>50)
                {
                    alert("Marks cant exceed 50");
                    txtid=txt.id;

                    document.getElementById(txtid).value="";
                    document.getElementById(txtid).focus();
                }
            }

        }

        function go()
        {

            var c=document.getElementById("marks").value;
            var d=document.getElementById("course").value;
            var e=document.getElementById("sem").value;
            var f=document.getElementById("sub").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "teacher_add_minor1marks.php?c=" +c+ "&d="+d+ "&e="+e + "&f="+f, true);
            xmlhttp.send();



        }


    </script>


</head>
<body>
<?php

include "connection.php";

?>
<table  align="center" cellspacing="10" cellpadding="10">
    <tr>
    <th colspan="2">

    <select align='center' id="marks" onchange="go()" >
    <option value="">--select--</option>
    <option value="minor_1_marks" >minor1</option>
    <option value="minor_2_marks" >minor2</option>
    <option value="quiz_marks" >quiz</option>
    <option value="major_marks" >major</option>
</select>
       </th>
    </tr>
    </table>

<span id="sp1"></span>


<?php

$course=$_REQUEST['q'];
$sem=$_REQUEST['s'];
$sub=$_REQUEST['r'];

?>
<input type="hidden" id="course" value="<?php echo $course ?>">
<input type="hidden" id="sem" value="<?php echo $sem ?>">
<input type="hidden" id="sub" value="<?php echo $sub ?>">
</body>

</html>