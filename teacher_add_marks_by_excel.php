<!doctype>
<html>
</html>
<?php
include "teacher_header.php";
?>
<html>


<head>

    <script type="text/javascript">

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
            xmlhttp.open("GET", "teacher_download_upload_excel.php?c=" +c+ "&d="+d+ "&e="+e + "&f="+f  , true);
            xmlhttp.send();



        }


    </script>


</head>
<body>

<?php
include "connection.php";
?>
<script>
    function go1()
    {
        //alert();
        var c=document.getElementById("marks").value;
        //alert(c);
        var d=document.getElementById("course").value;
        var e=document.getElementById("sem").value;
        var f=document.getElementById("sub").value;
        window.location.href="teacher_upload1.php?r="+f+ "&s="+e+ "&t="+d ;


    }
</script>
<table align='center'>
    <tr>

<td><select align='center' id="marks" onchange="go()" >
    <option value="">--select--</option>
    <option value="minor1" >minor1</option>
    <option value="minor2" >minor2</option>
    <option value="quiz" >quiz</option>
    <option value="major" >major</option>

</select>
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