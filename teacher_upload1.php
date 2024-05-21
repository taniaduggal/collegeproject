<?php
$course=$_REQUEST['t'];
$sem=$_REQUEST['s'];
$sub=$_REQUEST['r'];
include "teacher_header.php";
?>




<html>
  <head>

  </head>
<body>
  <form action="teacher_upload2.php?q=<?php echo $course ?>&s=<?php echo $sem ?>&r=<?php echo $sub ?>" method="post" enctype="multipart/form-data">
      <table align='center'>
          <tr>
              <td>Upload File </td>
              <td><input type="file" name="file1"></td>
          </tr>
          <tr></tr>
          <tr>
              <td></td>
              <td><input type="submit"></td>
          </tr>

      </table>
  </form>
<?php   echo "<center><span style='color:red;'>Note: Upload a copy of workbook that is fully compatible with Excel 97-2003</span></center>";?>
</body>
</html>