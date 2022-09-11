<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM users_feedback WHERE f_id = '".$_GET['feedback_del']."'");
header("location:all_feedback.php");  

?>