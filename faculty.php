<?php require_once("connection/admin.php")?>
<?php
$level_id = $_GET['level_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>STUDIA | FACULTY</title>
<meta name="keywords" content="STUDIA"/>
<meta name="description" content="STUDIA"/>
<?php include 'meta.php'?>
</head>
<body>



	<a href="level.php"><div class="left-arrow"><img src="all-images/images/vector.svg" alt="left arrow"/></div></a>

	<div class="first-header">SELECT FACULTY</div>


	<?php
        $facultyquery=mysqli_query($conn,"SELECT * FROM `faculty`")or die (mysqli_error($conn));
		$no=0;
        while($fal_sel=mysqli_fetch_array($facultyquery)){
        $no++;
		$faculty_id=$fal_sel['faculty_id'];
		$faculty_name=$fal_sel['faculty_name'];
		$faculty_abbr=$fal_sel['faculty_abbr'];
    ?>

	<a href="programmes.php?level_id=<?php echo $level_id; ?>&faculty_id=<?php echo $faculty_id; ?>">
	<div class="level-col">
		<div class="level-col-logo">
			<div class="level-col-logo-in"></div>
		</div>
		<div class="level-col-text1">
			<?php echo $faculty_abbr; ?>
		</div>
		<div class="level-col-text2">
			<?php echo $faculty_name; ?>
		</div>
	</div>
	</a>

	<?php } ?>



</body>
</html>