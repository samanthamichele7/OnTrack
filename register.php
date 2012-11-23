<?php 
    if(isset($_POST['register'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['pwd']);
        $retyped = trim($_POST['conf_pwd']);
        $userfile = '../OnTrack/encrypted.txt';
        require_once('includes/register_user_text.inc.php');

    }

        require('header.php');

?>

		        
    <div data-role="page" id="welcome" data-theme="a">

		<div id="logoheader"></div><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->
            
        <div data-role="content" data-theme="a" id="pagecontent">
            <div id="maincontent">

                <h1>Register User</h1>
                    <?php
                    if (isset($result)) {
                        echo '<ul>';
                        if (!empty($errors)){
                            foreach ($errors as $item) {
                                echo "<li>$item</li>";
                            }
                        } else{
                            echo "<li>$result</li>";
                        }                        
                        echo'</ul>';
                    }
                    ?>

                
                <form action="" method="post" id="register_form" data-ajax="false">
                  <p>
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username">
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
                </form>
            </div><!--end of maincontent-->
        </div><!--end of content-->
            
	</div><!--end of page-->
    
</body>
</html>