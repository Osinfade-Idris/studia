<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);

$thename='STUDIA';
$conn = mysqli_connect("localhost", "root", "")or die("Unable to connect to MySQL");
mysqli_select_db($conn, "studia");
///////////////////////////////////////////////////////////////////////////////////////

// for admin registration and update
$fullname=strtoupper(trim($_POST['fullname']));

$level_id=(trim($_POST['level_id']));
$faculty_id=(trim($_POST['faculty_id']));
$programme_id=(trim($_POST['programme_id']));
$semester_id=(trim($_POST['semester_id']));
$session_id=(trim($_POST['session_id']));
$pq=(trim($_POST['pq']));


$password=md5(trim($_POST['password']));
$confirm_password=md5(trim($_POST['confirm_password']));
?>
