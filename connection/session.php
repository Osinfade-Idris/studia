<?php
session_start();			
if ($_POST && !empty($_POST['logusername'])) {
$_SESSION['logusername'] = $_POST['logusername'];
}
$logusername=$_SESSION['logusername'];
  
if ($_POST && !empty(md5(trim($_POST['logpassword'])))) {
$_SESSION['logpassword'] = md5(trim($_POST['logpassword']));
}
$logpassword=$_SESSION['logpassword'];


///// user session
$suserid=$_SESSION['userid'];


$loguser_id=$_SESSION['userid'];


//// for user registration
$reg_user_id=$_SESSION['reg_user_id'];
?>


























































<?php


class allClass{




////////////////////////////////	
    function _get_user_otp($conn, $reset_email){
		$user_otp_query=mysqli_query($conn,"SELECT * FROM admin_tab WHERE email='$reset_email'")or die (mysqli_error($conn));
		$otp_sel=mysqli_fetch_array($user_otp_query);

		$surname=$otp_sel['surname'];
		$othernames=$otp_sel['othernames'];
		$fullname=ucwords(strtoupper("$surname $othernames"));
		$reset_email=$otp_sel['email'];
		$otp=$otp_sel['otp'];
		return '[{"fullname":"'.$fullname.'", "surname":"'.$surname.'", "othernames":"'.$othernames.'", "email":"'.$reset_email.'", "otp":"'.$otp.'"}]';
	}	



}//end of class
$callclass=new allClass();



?>



