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