<?php require_once("connection/admin.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>STUDIA | LEVEL</title>
<meta name="keywords" content="STUDIA"/>
<meta name="description" content="STUDIA"/>
<?php include 'meta.php'?>
</head>
<body>

<div class="home-page" style="margin-top:10%">  
    <div class="header-div"></div>

	<a href="/studia"><div class="left-arrow"><img src="all-images/images/vector.svg" alt="left arrow"/></div></a>

	<div class="first-header">SELECT LEVEL</div>

	<?php
        $levelquery=mysqli_query($conn,"SELECT * FROM `level`")or die (mysqli_error($conn));
		$no=0;
        while($level_sel=mysqli_fetch_array($levelquery)){
        $no++;
		$level_id=$level_sel['level_id'];
        $level_name=$level_sel['level_name'];
    ?>

	<a href="faculty.php?level_id=<?php echo $level_id; ?>">
	<div class="level-col">
		<div class="level-col-logo">
			<div class="level-col-logo-in"></div>
		</div>
		<div class="level-col-text">
			<?php echo $level_name; ?>
		</div>
	</div>
	</a>

	<?php } ?>

	
	
</div>


</body>
</html>