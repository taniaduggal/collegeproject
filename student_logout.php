
<?php
session_start();
unset($_SESSION["student"]);
session_destroy();
header("location:student_login.php");