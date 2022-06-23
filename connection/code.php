<?php require_once('admin.php'); ?>
<?php require_once('session.php'); ?>
<?php $action = $_REQUEST['action']; ?>



<?php
if ($action == 'login') {
    $userquery = mysqli_query($conn, "SELECT * FROM `admin_tab` WHERE email = '$logusername' AND `password` = '$logpassword'");
    $usersel = mysqli_fetch_array($userquery);
    $userid = $usersel['user_id'];
    $role_id = $usersel['role_id'];
    $_SESSION['userid'] = $userid;
    $suserid = $_SESSION['userid'];
    mysqli_query($conn, "UPDATE `admin_tab` SET last_login=NOW() WHERE user_id='$suserid'"); //// update last login

    if ($role_id == 1) {
?>
        <script>
            window.parent(location = "../watchguard/admin-portal/index.php");
        </script>
    <?php
    }elseif(($role_id == 2) || ($role_id == 3)) {
    ?>
        <script>
            window.parent(location = "../watchguard/admin-portal/index.php");
        </script>
    <?php
    }else{
        session_destroy();
    ?>
        <script>
            alert('INCORRECT PASSWORD!!!');
            window.parent(location = "../watchguard/index.php");
        </script>
<?php
    }
}
?>

<?php
//// for logout
if ($action == 'logout') {
    session_destroy();
?>
    <script>
        window.parent(location = "../watchguard/index.php");
    </script>
<?php
}
?>


<?php
//// for user registration
if ($action == 'add_pq') {

    $fquery = mysqli_query($conn, "SELECT * FROM `faculty` WHERE faculty_id='$faculty_id'");
    $fsel = mysqli_fetch_array($fquery);
    $faculty_name = $fsel['faculty_abbr'];
    $faculty_name = $faculty_name;

    $lquery = mysqli_query($conn, "SELECT * FROM `level` WHERE level_id='$level_id'");
    $lsel = mysqli_fetch_array($lquery);
    $level_name = $lsel['level_name'];
    $level_name = $level_name;

    $pquery = mysqli_query($conn, "SELECT * FROM `program_tab` WHERE programme_id='$programme_id'");
    $psel = mysqli_fetch_array($pquery);
    $programme_name = $psel['programme_name'];
    $programme_name = $programme_name;

    $squery = mysqli_query($conn, "SELECT * FROM `session` WHERE `session_id`='$session_id'");
    $ssel = mysqli_fetch_array($squery);
    $session_name = $ssel['session_name'];
    $session_name = $session_name;

    $mquery = mysqli_query($conn, "SELECT * FROM `semester` WHERE semester_id='$semester_id'");
    $msel = mysqli_fetch_array($mquery);
    $semester_name = $msel['semester_name'];
    $semester_name = $semester_name;


    $idquery = mysqli_query($conn, "SELECT * FROM `faculty_level` WHERE faculty_id='$faculty_id' AND level_id='$level_id'");
    $idsel = mysqli_fetch_array($idquery);
    $fl_id = $idsel['fl_id'];
    $fl_id = $fl_id;

    $pq = $_FILES['pq']['name'];
    $allowedExts = array("jpg", "jpeg", "JPEG", "JPG", "pdf");
    $extension = pathinfo($_FILES['pq']['name'], PATHINFO_EXTENSION);
    if (in_array($extension, $allowedExts)) {
    $pq = 'STUDIA_' . $pq; 
    move_uploaded_file($_FILES["pq"]["tmp_name"], "../pq/" . $pq);
    }
    mysqli_query($conn, "INSERT INTO program 
        VALUES ('', '$fl_id', '$level_id', '$programme_id', '$programme_name','$session_id', '$semester_id' , '$pq')") or die('Cannot insert');
    ?>
    <script>
        alert('PAST QUESTION ADDED SUCCESSFULLY!!!');
        window.parent(location = "../watchguard/admin-portal/add-pastquestion.php");
    </script>
<?php
    }
?>


