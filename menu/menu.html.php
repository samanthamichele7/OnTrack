 <?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../favicon.ico" rel="SHORTCUT ICON">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>On Track Roller Derby Skills App</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.1/jquery.mobile.structure-1.1.1.min.css" /> 
        <link rel="stylesheet" href="../themes/derby.css" />
        <link rel="stylesheet" href="../style.css" />
        <link rel="stylesheet" type="text/css" href="../themes/simpledialog2.css" /> <!---Stylesheet for SimpleDialog2 plugin http://dev.jtsage.com/jQM-SimpleDialog/demos2/index.html -->
        <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.1.1/jquery.mobile-1.1.1.min.js"></script>
        <script type="text/javascript" src="http://dev.jtsage.com/cdn/simpledialog/latest/jquery.mobile.simpledialog2.min.js"></script> <!---Code for SimpleDialog2 plugin http://dev.jtsage.com/jQM-SimpleDialog/demos2/index.html -->
    </head>
<body>

    <div data-role="page" id="welcome" data-theme="a">
    
		<div id="logoheader"></div><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        <div id="topheadericon">
            <?php  include '../logout.inc.html.php'; ?>
        </div>
		
        <div data-role="header" data-position="inline">
        	
        </div><!--end of header -->
			
        <div data-role="content" data-theme="a">
        	<div id="maincontent">
        		<div id="rollergirlimg"><img src="../images/rollergirl.png" /></div><!--end of rollergirl-->
        		<div id="navitems"><p>What do you want to do today?</p>
                    <ul>
                        <li><a href="../rules/" data-role="button" data-mini="true" data-icon="arrow-r" data-ajax="false">Rules Test</a></li>
                        <li><a href="../skills/" data-role="button" data-mini="true" data-icon="arrow-r" data-ajax="false">Skills Test</a></li>
                        <li><a href="../endurance/" data-role="button" data-mini="true" data-icon="arrow-r" data-ajax="false">Endurance Test</a></li>
                    </ul>


          		</div><!--end of navitems-->
                
        	</div><!--end of maincontent-->
        </div><!--end of content-->
        
    </div><!--end of page-->
</body>
</html>