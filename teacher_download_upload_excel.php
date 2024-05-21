<body>
    <?php
$marks=$_REQUEST['c'];

$course=$_REQUEST['d'];
$sem=$_REQUEST['e'];
$sub=$_REQUEST['f'];
?>
<form action="teacher_download.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>&t=<?php echo $marks?>" method="post">
<table>
    <tr>
<td><input type="submit" value="DOWNLOAD EXCEL TEMPLATE"></td>

    <td><input type="button" id="u" onclick="go1()" value="UPLOAD MARKS"></td>

    </table>
    </form>
    <?php
    echo "<span style='color:red;'>Note: Save a copy of workbook that is fully compatible with Excel 97-2003</span>";
?>
</body>
</html>