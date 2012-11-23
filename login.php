<?php 
    $error = '';
        if (isset($_POST['login'])) {
            session_start();
            $username = trim($_POST['username']);
            $password = trim($_POST['pwd']);
            //location to redirect on success
            $redirect ='http://ontrackrollerderby.com/menu.php';
            require_once('includes/authenticate_pdo.inc.php');
        }

        require('header.php');

?>

		        
    <div data-role="page" id="welcome" data-theme="a">

		<div id="logoheader"></div><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->
            
        <div data-role="content" data-theme="a" id="pagecontent">
            <div id="maincontent">

                <?php
                      if ($error) {
                        echo"<p>$error</p>";
                        }
                ?>
                <form action="" method="post" id="login_form" data-ajax="false">
                    <p>
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username">
                    </p>
                    <p>
                        
                         <label for="pwd">Password: </label>
                         <input type="password" name="pwd" id="pwd">   
                    </p>
                    <p>
                        <input type="submit" name="login" id="login" value="Log in">
                    </p>
                </form>
            </div><!--end of maincontent-->
        </div><!--end of content-->
            
	</div><!--end of page-->
    
</body>
</html>