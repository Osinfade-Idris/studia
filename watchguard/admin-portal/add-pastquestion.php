<?php require_once("../../connection/admin.php")?>
<?php require_once("../../connection/session.php")?>
<?php require_once("../../connection/query.php")?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php require_once ("reference.php")?>
<title>Add New Past Question | <?php echo $thename;?></title>
</head>
<body>
<?php require_once ("navigation.php")?>


<div class="body-div">
        <?php require_once ("header.php")?>
        <div class="page-name-div">
	        <div class="page-name">
			<h1><i class="fa fa-plus"></i> Add Past Question</h1>
		</div>
        </div>


        <form action="../../connection/code.php?action=add_pq"  enctype="multipart/form-data" method="post">
        <div class="profile-details">

               <div class="reg-title-div">
                Fill this form to add a <span>PAST QUESTION</span>
                </div>

                
                <div class="span"> SELECT LEVEL:</div>
                <select class="combo-field" id=""  title="Please select level" name="level_id"> 
		<option value="" selected>SELECT LEVEL</option>
		<?php
		$levelquery=mysqli_query($conn,"SELECT * FROM `level`");
		while ($leveldata= mysqli_fetch_array($levelquery)){
		$level_id=$leveldata['level_id'];
                $level_name=$leveldata['level_name'];       
                ?>
                <option value="<?php echo $level_id?>"><?php echo $level_name?></option>
                <?php }?>
                </select>

                <div class="span"> SELECT FACULTY:</div>
                <select class="combo-field" id=""  title="Please select faculty" name="faculty_id"> 
		<option value="" selected>SELECT FACULTY</option>
		<?php
		$facultyquery=mysqli_query($conn,"SELECT * FROM `faculty`");
		while ($facultydata= mysqli_fetch_array($facultyquery)){
		$faculty_id=$facultydata['faculty_id'];
                $faculty_name=$facultydata['faculty_name'];       
                ?>
                <option value="<?php echo $faculty_id?>"><?php echo $faculty_name?></option>
                <?php }?>
                </select>

                <div class="span"> SELECT PROGRAMME:</div>
                <select class="combo-field" id=""  title="Please select programme" name="programme_id"> 
		<option value="" selected>SELECT PROGRAMME</option>
		<?php
		$programmequery=mysqli_query($conn,"SELECT * FROM `program_tab`");
		while ($programmedata= mysqli_fetch_array($programmequery)){
		$programme_id=$programmedata['programme_id'];
                $programme_name=$programmedata['programme_name'];       
                ?>
                <option value="<?php echo $programme_id?>"><?php echo $programme_name?></option>
                <?php }?>
                </select>


                <div class="span"> SELECT SESSION:</div>
                <select class="combo-field" id=""  title="Please select session" name="session_id"> 
		<option value="" selected>SELECT SESSION</option>
		<?php
		$sessionquery=mysqli_query($conn,"SELECT * FROM `session`");
		while ($sessiondata= mysqli_fetch_array($sessionquery)){
		$session_id=$sessiondata['session_id'];
                $session_name=$sessiondata['session_name'];       
                ?>
                <option value="<?php echo $session_id?>"><?php echo $session_name?></option>
                <?php }?>
                </select>

                <div class="span"> SELECT SEMESTER:</div>
                <select class="combo-field" id=""  title="Please select semester" name="semester_id"> 
		<option value="" selected>SELECT SEMESTER</option>
		<?php
		$semesterquery=mysqli_query($conn,"SELECT * FROM `semester`");
		while ($semesterdata= mysqli_fetch_array($semesterquery)){
		$semester_id=$semesterdata['semester_id'];
                $semester_name=$semesterdata['semester_name'];       
                ?>
                <option value="<?php echo $semester_id?>"><?php echo $semester_name?></option>
                <?php }?>
                </select>

                <div class="span"> UPLOAD PAST QUESTION:</div>
                <input type="file" name="pq" accept=".pdf" class="text-field" />

                <button type="submit" class="btn"> SUBMIT <i class="fa fa-check"></i></button>
                                                                                                    
        </form> 
        
        
        </div>                
</div>





</body>
</html>



