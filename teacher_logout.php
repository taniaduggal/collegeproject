<?php
session_start();
unset($_SESSION["teacher"]);
session_destroy();
header("location:teacher_login.php");