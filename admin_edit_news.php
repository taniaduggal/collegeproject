<?php
$news_id=$_REQUEST['q'];
 include "connection.php";
$query7="select * from news where news_id='".$news_id."'";
$res3=mysqli_query($conn,$query7);
$row3=mysqli_fetch_array($res3);
?>
<?php include "admin_header.php" ?>
<form action="admin_edit_news_action.php" method="post">
    <table border="1">
        <tr>
            <th colspan="2">
                <h1>EDIT NEWS </h1>
            </th>
        </tr>
        <tr>
            <th>Enter News Id</th>
            <th>
                <input type="text" name="newsid"readonly value="<?php echo $row3[0]?>" required>
            </th>
        </tr>
        <tr>
            <th>
                Enter Title
            </th>
            <th>
                <input type="text" name="title" value="<?php echo $row3[1]?>"required>
            </th>
        </tr>
        <tr>
            <th>Enter description</th>
            <th>
                <textarea rows="5" cols="22" name="description"><?php echo $row3[2]?></textarea>
            </th>
        </tr>
        <tr>
            <th></th>
            <th><input type="submit" value="EDIT COURSE">
            </th>
        </tr>
    </table>


</form>