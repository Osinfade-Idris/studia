<?php require_once("connection/admin.php")?>

<?php
$level_id = $_GET['level_id'];
$faculty_id = $_GET['faculty_id'];
$programme_id = $_GET['programme_id'];
$fl_id = $_GET['fl_id'];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>STUDIA | SESSION</title>
<meta name="keywords" content="STUDIA"/>
<meta name="description" content="STUDIA"/>
<?php include 'meta.php'?>
</head>
<body>



	<a href="programmes.php?level_id=<?php echo $level_id; ?>&faculty_id=<?php echo $faculty_id; ?>"><div class="left-arrow"><img src="all-images/images/vector.svg" alt="left arrow"/></div></a>

	<div class="first-header">ACADEMIC SESSION</div>


	<?php
        $programquery=mysqli_query($conn,"SELECT DISTINCT `session_id` FROM `program` WHERE `fl_id`='$fl_id' AND programme_id='$programme_id' AND level_id='$level_id'")or die (mysqli_error($conn));
		$no=0;
        while($p_sel=mysqli_fetch_array($programquery)){
        $no++;

		$session_id=$p_sel['session_id'];
		$semester_id=$p_sel['semester_id'];


		$session_query = mysqli_query($conn, "SELECT * FROM `session` WHERE `session_id`='$session_id'") or die('cannot select administrators');
		$session_sel = mysqli_fetch_array($session_query);
		$session_name = $session_sel['session_name'];
    ?>

	<a href="semester.php?level_id=<?php echo $level_id; ?>&fl_id=<?php echo $fl_id; ?>&programme_id=<?php echo $programme_id; ?>&faculty_id=<?php echo $faculty_id; ?>&session_id=<?php echo $session_id; ?>">
		<div class="level-col">
		<div class="level-col-logo">
			<div class="level-col-logo-in"></div>
		</div>
		<div class="level-col-text3">
			<?php echo $session_name ?>
		</div>
	</div>

	</a>

	<?php } ?>



</body>
</html>