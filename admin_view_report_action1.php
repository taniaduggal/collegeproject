<?php
$c=$_REQUEST['coursename'];
?>

<table align='center'>
    <tr>
    <th>  Choose Year</th>
    <th>
        <select name="year" id="year" onchange="go1()">
            <option value="">--Select--</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
</select>
        </th>
    </tr>
</table>

<input type="hidden" id="course" value="<?php echo $c ?>">



