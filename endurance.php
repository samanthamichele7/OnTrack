<?php include('header.php');?>


	<div data-role="page" data-theme="a">
		
        <a href="menu.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
		
        <div id="topheadericon">
        	<a href="menu.php" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
            <a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
        <div data-role="header" data-position="inline">
		</div><!--end of header -->
        
        <div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->
       
            <img src="images/endurancetesttxt.png" width="196" height="34" alt="Endurance Test"><br>
			You must skate 25 laps in 5 minutes to pass the skills test.  Record your progress here.<br><br>
    
                <label for="mydate">Date (MM/DD/YYYY):</label>

                    <input name="mydate" id="mydate" type="date" data-role="datebox" data-options='{"mode": "calbox"}' data-inline="true"><br>
                 <form>
                 <label for="slider-number">Number of laps:</label>
                    <input type="range" name="slider-number" id="slider-number" value="20" min="0" max="35" step="0.5"  />
                </form><br>

                <form>
                <label for="slider-time">Time (Minutes):</label>
                    <input type="range" name="slider-time" id="slider-time" value="3" min="1" max="5" step="0.5" />
                </form>

            <div class="center-button">
                <a href="#" data-role="button" data-inline="true">Record Laps</a>
                <a href="#" data-role="button" data-inline="true">View History</a>
            </div><!--center-button-->
        </div><!--content / pagecontent-->

		<div data-role="footer" data-theme="a" data-position="fixed">		
            <div data-role="navbar">
                <ul>
                    <li><a href="rules.php">Rules</a></li>
                    <li><a href="skills.php">Skills</a></li>
                    <li class="ui-disabled"><a href="endurance.php">Endurance</a></li>
                </ul>
            </div><!-- /navbar -->
        </div><!-- /footer -->
	</div><!--end of page-->
</body>
</html>