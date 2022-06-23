<?php
if(empty($suserid)){
 include 'meta.php';
?>
	<script>
	alert('session expired')
	window.parent(location="../index.php");
	</script>
<?php 
exit;
}else{

$userquery = mysqli_query ($conn,"SELECT * FROM `admin_tab` WHERE user_id = '$suserid'") or die ('cannot select user');
$user_count=mysqli_num_rows($userquery);
if ($user_count>0){
	//// do nothing
	$userdata=mysqli_fetch_array($userquery);

	$user_id=$userdata['user_id'];
	$surname=$userdata['surname'];
	$othernames=$userdata['othernames'];
	$fullname=ucwords(("$surname $othernames"));
	$phone_number=$userdata['phone_number'];
	$email_address=$userdata['email_address'];
	$role_id=$userdata['role_id'];
	$password=$userdata['password'];
	
}else{
	?>
	<script>
	window.parent(location="../index.php");
	</script>

<?php	
}
}
?>



