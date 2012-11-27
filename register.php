<?php include('header.php');?>
		        
    <div data-role="page" id="welcome" data-theme="a">

		<div id="logoheader"></div><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->
            
        <div data-role="content" data-theme="a">
            <div id="maincontent">
                <div id="rollergirlimg"><img src="images/rollergirl.png" /></div><!--end of rollergirl-->
                <div id="welcometext"><img src="images/welcome.png" /></div><!--end of welcome banner-->
                <div id="navitems"><p>Registration is disabled for now.  In the meantime, please log in with the following information:</p>
                    <ul>
                        <li>Username: test@example.com</li>
                        <li>Password: password</li>
                    </ul>

                    <a href="login.php" data-role="button" data-mini="true" data-ajax="false">Log In</a>

                </div><!--end of navitems-->
                
            </div><!--end of maincontent-->
           
        </div><!--end of content-->
            
	</div><!--end of page-->
    
</body>
</html>