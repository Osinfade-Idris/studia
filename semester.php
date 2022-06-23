<?php require_once("connection/admin.php")?>
<?php
$level_id = $_GET['level_id'];
$faculty_id = $_GET['faculty_id'];
$programme_id = $_GET['programme_id'];
$fl_id = $_GET['fl_id'];
$session_id = $_GET['session_id'];



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>STUDIA | SEMESTER</title>
<meta name="keywords" content="STUDIA"/>
<meta name="description" content="STUDIA"/>
<?php include 'meta.php'?>
</head>
<body>


	<a href="session.php?programme_id=<?php echo $programme_id; ?>&fl_id=<?php echo $fl_id; ?>&level_id=<?php echo $level_id; ?>&faculty_id=<?php echo $faculty_id; ?>"><div class="left-arrow"><img src="all-images/images/vector.svg" alt="left arrow"/></div></a>

	<div class="first-header">SELECT SEMESTER</div>

	<?php
       $programquery=mysqli_query($conn,"SELECT * FROM `program` WHERE `fl_id`='$fl_id' AND programme_id='$programme_id' AND level_id='$level_id' AND `session_id`='$session_id'")or die (mysqli_error($conn));
	   $no=0;
        while($p_sel=mysqli_fetch_array($programquery)){
        $no++;
		
		$semester_id=$p_sel['semester_id'];

		$question=$p_sel['pq'];


		$semester_query = mysqli_query($conn, "SELECT * FROM `semester` WHERE `semester_id`='$semester_id'") or die('cannot select administrators');
		$semester_sel = mysqli_fetch_array($semester_query);
		$semester_name = $semester_sel['semester_name'];
    ?>

	<a href="pq/<?php echo $question; ?>" target="_blank">
	
	<div class="level-col">
	
		<div class="level-col-logo">
			<div class="level-col-logo-in"></div>
		</div>
		<div class="level-col-text3">
			<?php echo $semester_name ?>
		</div>
	</div>

	</a>

	<?php } ?>



</body>
</html>