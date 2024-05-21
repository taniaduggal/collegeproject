<?php
include "connection.php";
include "admin_header.php";
?>
<head>
    <title>

    </title>
</head>
<body>
<?php
$email=$_REQUEST['q'];
$s="select * from admin where email='".$email."'";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$type=$row[2];
?>
<form action="admin_edit_admin_action.php" method="post">
    <table align ="center" border="1">
        <tr>
            <th colspan="2">
                <h2>Edit Admin</h2>
            </th>
        </tr>
        <tr>
            <th>Enter Email</th>
            <th>
                <input type="email" name="email" readonly value="<?php echo $email; ?>">
            </th>
        </tr>
        <tr>
            <th>Select Type:</th>
            <th>
                <select name="type">
                    <option values=""">--Select--</option>
                    <option value="Admin"<?php if($type=="Admin") {  ?> selected <?php  } ?>>Admin</option>
                    <option value="Limited_user" <?php if($type=="Limited_user") {  ?> selected <?php  } ?>>Limited user</option>
                    <option value="Power_user" <?php if($type=="Power_user") {  ?> selected <?php  } ?>>Power user</option>

                </select>
            </th>
        </tr>
        <tr>
            <th></th>
            <th><input type="submit" value="Edit"></th>
        </tr>
    </table>
</form>
</body>