<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

    if(isset($_POST['register'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['pwd']);
        $retyped = trim($_POST['conf_pwd']);
        
        require_once('includes/register_user_pdo.inc.php');

    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>On Track Roller Derby Skills App</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile.structure-1.1.1.min.css" /> 
        <link rel="stylesheet" href="themes/derby.css" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" type="text/css" href="themes/simpledialog2.css" /> <!---Stylesheet for SimpleDialog2 plugin http://dev.jtsage.com/jQM-SimpleDialog/demos2/index.html -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/simpledialog/latest/jquery.mobile.simpledialog2.min.js"></script> <!---Code for SimpleDialog2 plugin http://dev.jtsage.com/jQM-SimpleDialog/demos2/index.html -->
    </head>
<body>
		        
    <div data-role="page" id="welcome" data-theme="a">

		<div id="logoheader"></div><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->
            
        <div data-role="content" data-theme="a" id="pagecontent">
            <div id="maincontent">
               
               <h1>Register User</h1>
                    <?php
                    if (isset($success)){
                        echo "<p>$success</p>";
                    } elseif (isset($errors) && !empty($errors)){
                        echo '<ul>';
                        foreach ($errors as $error) {
                            echo "<li>$error</li>";
                        }
                        echo '</ul>';
                    }
                    ?>

                
                <form action="" method="post" id="register_form" data-ajax="false">
                  <p>
                    <label for="username">Name:</label>
                    <input type="text" name="name" id="username">
                  </p>
                  <p>
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email">
                 </p>
                  <p>
                    <label for="pwd">Password:</label>
                    <input type="password" name="pwd" id="pwd">
                  </p>
                  <p>
                    <label for="conf_pwd">Retype Password:</label>
                    <input type="password" name="conf_pwd" id="conf_pwd">
                  </p>
                  <p>
                    <input type="submit" name="register" id="register" value="Submit">
                  </p>
                  <?php
                  if (isset($success)){
                    echo '<a href="/menu/" data-role="button" data-ajax="false">Log In</a>';
                  }
                  ?>
                </form> 


                
            </div><!--end of maincontent-->
           
        </div><!--end of content-->
            
	</div><!--end of page-->
    
</body>
</html>