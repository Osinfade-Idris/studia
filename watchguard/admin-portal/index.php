<?php require_once("../../connection/admin.php")?>
<?php require_once("../../connection/session.php")?>
<?php require_once("../../connection/query.php")?>

<?php
$master_admin_query = mysqli_query ($conn,"SELECT * FROM `program`");
$pq=mysqli_num_rows($master_admin_query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once ("reference.php")?>

<title>Admin Portal | <?php echo $thename;?></title>
</head>

<body>
<?php require_once ("navigation.php")?>
<div class="body-div">
		<?php require_once ("header.php")?>
	
	<div class="vms-title"><i class="fa fa-store-alt"></i> ADMIN PORTAL</div>
		<div class="menu-div">

				<a href="add-pastquestion.php">
				<div class="menu-link" style="background:rgba(51,153,153,.7)">
					<div class="icon-div"><i class="fa fa-book"></i></div>
					<div class="detail">
						<h2><?php echo number_format($pq); ?></h2>
						ADD PQs
					</div>
				</div></a>
		</div>
	<br clear="all">
</div>


</body>
</html>