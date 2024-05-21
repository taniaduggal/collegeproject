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
            xmlhttp.open("GET", "admin_view_report_action1.php?coursename=" +coursename, true);
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
            xmlhttp.open("GET", "admin_view_report_action2.php?year=" +year+"&course="+course,true);
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
            xmlhttp.open("GET", "admin_view_report_action3.php?year="+year+"&session="+session+"&course="+course,true);
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
            xmlhttp.open("GET", "admin_view_report_action4.php?sem="+sem+"&session="+session+"&course="+course+"&year="+year,true);
            xmlhttp.send();



        }
        function go4()
        {

            var session=document.getElementById("session").value;
            var course=document.getElementById("course").value;
            var sem=document.getElementById("sem").value;
            var sub=document.getElementById("subjects").value;

            var year=document.getElementById("year").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp5").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "admin_view_report_action5.php?sem="+sem+"&session="+session+"&course="+course+"&year="+year+"&subject="+sub,true);
            xmlhttp.send();
        }
        function go5()
        {

                var session=document.getElementById("session").value;
                var course=document.getElementById("course").value;
                var sem=document.getElementById("sem").value;
                var sub=document.getElementById("subjects").value;
                var year=document.getElementById("year").value;
                var markstype=document.getElementById("markstype").value;

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("sp6").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "admin_view_report_action6.php?sem="+sem+"&session="+session+"&course="+course+"&year="+year+"&subject="+sub+"&markstype="+markstype,true);
                xmlhttp.send();


        }








    </script>


</head>
<body>

<table align='center'>
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
        <table align="center">
            <tr>
                <th>
                    <span id="sp6"></span>
                </th>
            </tr>
        </table>

</body>
</html>
