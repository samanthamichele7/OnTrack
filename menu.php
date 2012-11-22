<?php 
include('auth_session.php');
include('header.php');

?>

    <div data-role="page" id="welcome" data-theme="a">
    
		<div id="logoheader"></div><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        <div id="topheadericon">
        	<a href="index.php" data-role="button" data-icon="delete" data-iconpos="notext" data-mini="true" data-inline="true">Delete</a>
        </div>
		
        <div data-role="header" data-position="inline">
        	
        </div><!--end of header -->
			
        <div data-role="content" data-theme="a">
        	<div id="maincontent">
        		<div id="rollergirlimg"><img src="images/rollergirl.png" /></div><!--end of rollergirl-->
        		<div id="navitems"><p>What do you want to do today?</p>
                    <ul>
                        <li><a href="rules.php" data-role="button" data-mini="true" data-icon="arrow-r" data-ajax="false">Rules Test</a></li>
                        <li><a href="skills.php" data-role="button" data-mini="true" data-icon="arrow-r">Skills Test</a></li>
                        <li><a href="endurance.php" data-role="button" data-mini="true" data-icon="arrow-r">Endurance Test</a></li>
                    </ul>
          		</div><!--end of navitems-->
        	</div><!--end of maincontent-->
        </div><!--end of content-->
        
    </div><!--end of page-->
</body>
</html>