<?php require_once("../connection/admin.php")?>
<?php require_once("../connection/session.php")?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Administrative Login | <?php echo $thename;?></title>
<meta name="keywords" content="Admin - STUDIA"/>
<meta name="description" content="Administrative Login STUDIA | <?php echo $thename;?>"/>
<?php include 'meta.php'?>
</head>
<body>


<div class="login-back-div animated fadeIn animated animated">
	<div class="left-div">
            <div class="login-div animated fadeInLeft animated animated">
				<div class="text" id="login-info">
                <h1><i class="fa fa-user-circle"></i> ADMINISTRATIVE LOG-IN <br /><hr /></h1><br clear="all" />
        <form action="../connection/code.php?action=login" id="loginform" enctype="multipart/form-data" method="post">
            <div class="title"><i class="fa fa-envelope"></i> Email Address:</div>
            <input name="logusername" id="username" type="text" class="text_field" placeholder="Enter Your Email Address" title="Enter Your Email Address" />
                
            <div class="title"><i class="fa fa-lock"></i> Password:</div>
            <input name="logpassword" id="password" type="password" class="text_field" placeholder="Enter Your Password" title="Enter Your Password"/>
            <input name="action" value="login" type="hidden" />
                
            <button class="btn" type="submit"  title="Login" id="login-btn"><i class="fa fa-check"></i> Log-In </button>
        </form>
    </div>      
</div>

<script src="js/superplaceholder.js"></script> 
<script>
		superplaceholder({
			el: username,
				sentences: [ 'Enter Email Address'],
				options: {
				letterDelay: 80,
				loop: true,
				startOnFocus: false
			}
		});
</script>
    <script src="js/aos.js"></script>
    <script>
      AOS.init({
        easing: 'ease-in-out-sine'
      });
    </script>
</body>
</html>