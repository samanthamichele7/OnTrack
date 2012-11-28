<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php';
?>
`
<!DOCTYPE html>
<html>
    <head>
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

	<div data-role="page" data-theme="a">
		
        <a href="/menu/"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
		
        <div id="topheadericon">
        	<a href="../menu/" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
            <a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
        <div data-role="header" data-position="inline">
		</div><!--end of header -->
        
        <div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->
       
            <img src="../images/endurancetesttxt.png" width="196" height="34" alt="Endurance Test"><br>
			You must skate 25 laps in 5 minutes to pass the skills test.  Record your progress here.<br><br>


        <form data-ajax="false" id="endurance-form" method="POST" action="">
            
            <div data-role="fieldcontain">
                <label for="mydate">Date (MM/DD/YYYY):</label>
                <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "calbox"}' data-inline="true"><br>
            </div><!--End date selector-->

            <div data-role="fieldcontain">
                 <label for="slider-number">Number of laps:</label>
                    <input type="range" name="slider-number" id="slider-number" value="20" min="0" max="35" step="0.5"  />
            </div><!--End laps input-->

            <div data-role="fieldcontain">
                <label for="slider-time">Time (Minutes):</label>
                    <input type="range" name="slider-time" id="slider-time" value="3" min="1" max="5" step="0.5" />
                
            </div><!--End minutes input-->

            <div class="center-button">

                <input type="submit" name="submit" value="Record Laps" id="record-laps" data-inline="true"/>
                <a href="records.html.php" data-role="button" data-inline="true">View History</a>
            </div><!--center-button-->
        </div><!--content / pagecontent-->

        </form>
		<div data-role="footer" data-theme="a" data-position="fixed">		
            <div data-role="navbar">
                <ul>
                    <li><a href="/rules/" data-ajax="false">Rules</a></li>
                    <li><a href="/skills/">Skills</a></li>
                    <li class="ui-disabled"><a href="/endurance/">Endurance</a></li>
                </ul>
            </div><!-- /navbar -->
        </div><!-- /footer -->
	</div><!--end of page-->
</body>
</html>