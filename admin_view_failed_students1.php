<?php
include "admin_header.php";
include "connection.php";

?>

<html>

<head>

    <script type="text/javascript">

        function go()
        {

            var coursename=document.getElementById("coursename").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "admin_view_failed_students2.php?coursename=" +coursename, true);
            xmlhttp.send();



        }

        function go1()
        {

            var year=document.getElementById("year").value;
            var course=document.getElementById("course").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp2").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "admin_view_failed_students3.php?year=" +year+"&course="+course,true);
            xmlhttp.send();



        }
        function go2()
        {

            var session=document.getElementById("session").value;
            var course=document.getElementById("course").value;
            var year=document.getElementById("year").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp3").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "admin_view_failed_students4.php?year="+year+"&session="+session+"&course="+course,true);
            xmlhttp.send();



        }
        function go3()
        {

            var session=document.getElementById("session").value;
            var course=document.getElementById("course").value;
            var sem=document.getElementById("sem").value;
            var year=document.getElementById("year").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp4").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "admin_view_failed_students5.php?sem="+sem+"&session="+session+"&course="+course+"&year="+year,true);
            xmlhttp.send();



        }


    </script>
</head>
<body>

<table align='center' >
    <tr>
        <th>Choose Course : <select name="coursename" id="coursename" required onchange="go()">
                <option value="">--Select--</option>
                <?php
                $query13="select * from admin_courses";
                $res_course=mysqli_query($conn,$query13);
                while($row5=mysqli_fetch_array($res_course))
                {
                    ?>
                    <option value="<?php echo $row5[0]; ?>"><?php echo $row5[0]; ?></option>
                <?php
                }
                ?>
            </select>

        </th>
        <th>
            <span id="sp1"></span>
        </th>
    </tr>
    <tr>
        <th><span id="sp2"></span></th>
        <th><span id="sp3"></span></th>
    </tr>
    <tr>
        <th><span id="sp4"></span></th>
        <th><span id="sp5"></span></th>
    </tr>

</table>




</body>
</html>
<div id="sp6"></div>