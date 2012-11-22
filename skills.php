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
        
           	<img src="images/skillstesttxt.png" width="118" height="30"><br>
            In order to pass the skills test, you must be able to perform all of these skills.<br><br>


		

			<div data-role="collapsible" data-collapsed="false">
			<h3>Basic Skating Skills</h3>
					<ul data-role="list-divider" data-theme="a">	
						<li><label><input type="checkbox" name="checkbox-0" /> Correct skating posture </label></li>
						<li><label><input type="checkbox" name="checkbox-1" /> Steady, confident strides </label></li>
						<li><label><input type="checkbox" name="checkbox-2" /> Crossovers </label></li>
						<li><label><input type="checkbox" name="checkbox-3" /> Skates 25 laps around WFTDA track in 5 minutes </label></li>
						<li><label><input type="checkbox" name="checkbox-4" /> T-Stop </label></li>
						<li><label><input type="checkbox" name="checkbox-5" /> Plow Stop </label></li>
						<li><label><input type="checkbox" name="checkbox-6" /> One-foot glides down straight-aways </label></li>
						<li><label><input type="checkbox" name="checkbox-7" /> Quick cuts: 3 on each straight-away and 2 on turn </label></li>
					</ul>
			</div><!--end of basic skating skills -->
	
			<div data-role="collapsible">
			<h3>Balance and Agility</h3>
					<ul data-role="list-divider" data-theme="a">
						<li><label><input type="checkbox" name="checkbox-13" /> Stepping from a standstill </label></li>
						<li><label><input type="checkbox" name="checkbox-14" /> Squatting at a 90 to 120 degree angle and coasting</label></li>
						<li><label><input type="checkbox" name="checkbox-15" /> Hops over an object at least 3 inches in height </label></li>
						<li><label><input type="checkbox" name="checkbox-16" /> Focusing to look left, right, and behind quickly and unexpectedly</label></li>
						<li><label><input type="checkbox" name="checkbox-17" /> Weaving through ten cones placed six feet apart</label></li>
					</ul>
			</div><!--end of balance and agility -->


			<div data-role="collapsible">
			<h3>Skating with Others</h3>
					<ul data-role="list-divider" data-theme="a">
						<li><label><input type="checkbox" name="checkbox-18" /> Whips: giving, receiving, and hip whips </label></li>
						<li><label><input type="checkbox" name="checkbox-19" /> Pushes: giving and receiving</label></li>
						<li><label><input type="checkbox" name="checkbox-20" /> Adjusting speed in a paceline </label></li>
						<li><label><input type="checkbox" name="checkbox-21" /> Weaving through a single-file line of skaters who are an arm's length apart</label></li>
						<li><label><input type="checkbox" name="checkbox-22" /> Avoiding other skaters who fall in a pack situation</label></li>
						<li><label><input type="checkbox" name="checkbox-23" /> Skating while leaning shoulder-to-shoulder with another skater</label></li>
						<li><label><input type="checkbox" name="checkbox-24" /> Maintaining or recovering balance, without falling, while being bumped into and having wheels bumped</label></li>
					</ul>
			</div><!--end of skating with others -->

			<div data-role="collapsible">
			<h3>Blocking</h3>
					<ul data-role="list-divider" data-theme="a">
						<li><label><input type="checkbox" name="checkbox-25" /> Taking hits safely </label></li>
						<li><label><input type="checkbox" name="checkbox-26" /> Positional blocking</label></li>
						<li><label><input type="checkbox" name="checkbox-27" /> Hip checks </label></li>
						<li><label><input type="checkbox" name="checkbox-28" /> Shoulder checks</label></li>
						<li><label><input type="checkbox" name="checkbox-29" /> Avoiding other skaters who fall in a pack situation</label></li>
					</ul>
			</div><!--end of blocking -->

			
		

              

            <div class="center-button">
                <a href="#" data-role="button" data-inline="true">Save</a>
                <a href="#" data-role="button" data-inline="true">Reset</a>
                </div>

		</div><!--end of pagecontent-->

		<div data-role="footer" data-theme="a" data-position="fixed">		
            <div data-role="navbar">
                <ul>
                    <li><a href="rules.php">Rules</a></li>
                    <li class="ui-disabled"><a href="skills.php">Skills</a></li>
                    <li><a href="endurance.php">Endurance</a></li>
                </ul>
            </div><!-- /navbar -->
        </div><!-- /footer -->
	</div><!--end of page-->
</body>
</html>