<?php 
session_start();
include "core/functions.php";
unset($_SESSION['auth']);
session_destroy();
reDirect('login.php');
die;




?>