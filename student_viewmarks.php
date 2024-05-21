<?php include "student_header.php";
 ?>
<html>

<head>

    <script type="text/javascript">

        function go()
        {

            var semester=document.getElementById("sem").value;
            var course=document.getElementById("course").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp1").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "student_view_marks_action.php?semester="+semester+"&course="+course, true);
            xmlhttp.send();



        }
        function go2()
        {

            var semester=document.getElementById("sem").value;
            var course=document.getElementById("course").value;
            var subjects=document.getElementById("subjects").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp2").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "student_view_marks_action2.php?semester="+semester+"&course="+course+"&subjects="+subjects, true);
            xmlhttp.send();



        }
        function go3()
        {

            var semester=document.getElementById("sem").value;
            var course=document.getElementById("course").value;
            var subjects=document.getElementById("subjects").value;
            var markstype=document.getElementById("markstype").value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("sp3").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "student_view_marks_action3.php?semester="+semester+"&course="+course+"&subjects="+subjects+"&markstype="+markstype, true);
            xmlhttp.send();



        }


    </script>
</head>
<body>
        <?php
        include "connection.php";
                $q="select coursename from admin_add_student where email='".$_SESSION['student']."'";
        $res=mysqli_query($conn,$q);
        $row=mysqli_fetch_array($res);
        $course=$row[0];
       // echo $course;
        ?>
        <div style="background-image: url('img/blur6.jpg');height: 600px;background-size: 100%;background-repeat: no-repeat">
<table align='center'>
    <br>
    <tr>
        <th>  Choose Semester :
            <select name="sem" id="sem" onchange="go()">
            <option value="">--Select--</option>
<?php
    if($course=="B.Tech")
      {
        ?>

<option value="sem1">Sem1</option>
          <option value="sem2">Sem2</option>
          <option value="sem3">Sem3</option>
          <option value="sem4">Sem4</option>
          <option value="sem5">Sem5</option>
          <option value="sem6">Sem6</option>
          <option value="sem7">Sem7</option>
          <option value="sem8">Sem8</option>


    <?php
    }
else
{
    ?>
                <option value="sem1">Sem1</option>
                <option value="sem2">Sem2</option>
                <option value="sem3">Sem3</option>
                <option value="sem4">Sem4</option>



                <?php
}
            ?>
    </select></th>
        <th><span id="sp1"></span></th>
        <th><span id="sp2"></span></th>
    </tr>
        </table>
        <table align="center">


            <tr>

                <th><span id="sp3"></span></th>
            </tr>

        </table>



<input type="hidden" id="course" value="<?php echo $course?>">
</div>