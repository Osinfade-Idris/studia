<?php require_once("connection/admin.php")?>
<?php
$level_id = $_GET['level_id'];
$faculty_id = $_GET['faculty_id'];

$fl_query = mysqli_query($conn, "SELECT * FROM `faculty_level` WHERE faculty_id='$faculty_id' AND level_id='$level_id'") or die('cannot select administrators');
$fl_sel = mysqli_fetch_array($fl_query);
$fl_id = $fl_sel['fl_id'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>STUDIA | PROGRAMMES</title>
<meta name="keywords" content="STUDIA"/>
<meta name="description" content="STUDIA"/>
<?php include 'meta.php'?>
</head>
<body>

<div class="home-page" style="margin-top:10%">  
    <div class="header-div"></div>

	<a href="faculty.php?level_id=<?php echo $level_id; ?>">
		<div class="left-arrow"><img src="all-images/images/vector.svg" alt="left arrow"/></div>
	</a>

	<div class="first-header">PROGRAMMES</div>

	<?php
        $programquery=mysqli_query($conn,"SELECT DISTINCT programme_id FROM `program` WHERE fl_id='$fl_id' AND level_id='$level_id'")or die (mysqli_error($conn));
		$no=0;
        while($p_sel=mysqli_fetch_array($programquery)){
        $no++;
		$programme_id=$p_sel['programme_id'];
		

		$p_query = mysqli_query($conn, "SELECT programme_name FROM `program_tab` WHERE programme_id='$programme_id'") or die('cannot select administrators');
		$p_work = mysqli_fetch_array($p_query);
		$programme_name = $p_work['programme_name'];
    ?>

	<a href="session.php?programme_id=<?php echo $programme_id; ?>&fl_id=<?php echo $fl_id; ?>&level_id=<?php echo $level_id; ?>&faculty_id=<?php echo $faculty_id; ?>">
	<div class="level-col">
		<div class="level-col-text3">
			<?php echo $programme_name ?>
		</div>
	</div>

	</a>

	<?php } ?>
	
	
</div>


</body>
</html>