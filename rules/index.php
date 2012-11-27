<?php 
require('../includes/access.inc.php');
include('../header.php');

if (!userIsLoggedIn())
{
  include 'login.php';
  exit();
}

?>

<!-- Question 1 -->
	
    <div data-role="page" data-theme="a" id="question1">
		
		<a href="menu.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div id="topheadericon">
        	<a href="menu.php" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
            	<a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->

	<div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->				
              <img src="images/rulestesttxt.png" width="112" height="30" alt="Rules Test">
              <h3>Which part of the body is considered an illegal blocking zone?</h3>
                    <ul>
                        <li>a. Chest</li>
                        <li>b. Upper arm</li>
                        <li>c. Hip</li>
                        <li>d. Above the shoulder</li>
                    </ul>

                    <div class="center-button">
                        <a href="#" id="opendialog1" data-role="button" data-inline="true" data-theme:"a">A</a>
                        <a href="#" id="opendialog1" data-role="button" data-inline="true">B</a>
                        <a href="#" id="opendialog1" data-role="button" data-inline="true">C</a>
                        <a href="#" id="opendialog1a" data-role="button" data-inline="true">D</a>
                    </div><!--center-button div-->      

                    <script type="text/javascript"> 
                            $(document).delegate('#opendialog1', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Incorrect!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#' data-theme='a' data-icon='arrow-l'>Try Again</a>" +
                                        "<a rel='close' data-role='button' href='#question2' data-theme='a' data-icon='check'>Next Question</a>"                                  
                                  })
                                })
                  </script><!-- incorrect question 1 div-->  

                  <script type="text/javascript"> 
                            $(document).delegate('#opendialog1a', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Correct!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#question2' data-theme='a' data-icon='check'>Next Question</a>"
                                  })
                                })
                  </script> <!-- correct question 1 div-->   

                    	
        </div><!--content div-->
		



        <div data-role="footer" data-theme="a" data-position="fixed">		
                <div data-role="navbar">
                    <ul>
                        <li class="ui-disabled"><a href="rules.php">Rules</a></li>
                        <li><a href="skills.php">Skills</a></li>
                        <li><a href="endurance.php">Endurance</a></li>
                    </ul>
                </div><!-- /navbar -->
        </div><!-- /footer -->
   
    </div><!--page Question 1 div-->


<!-- Question 2 -->
    
    <div data-role="page" data-theme="a" id="question2">

        <a href="menu.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div id="topheadericon">
            <a href="menu.php" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
                <a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->

    <div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->  
              <img src="images/rulestesttxt.png" width="112" height="30" alt="Rules Test">
          <h3>How many timeouts does each team have per game?</h3>              
            <ul>                    
                <li>a. One</li>                 
                <li>b. Two</li>                 
                <li>c. Three</li>               
                <li>d. None</li>
                    </ul>
                    
                <div class="center-button">
                        <a href="#" id="opendialog2" data-role="button" data-inline="true">A</a>
                        <a href="#" id="opendialog2" data-role="button" data-inline="true">B</a>
                        <a href="#" id="opendialog2a" data-role="button" data-inline="true">C</a>
                        <a href="#" id="opendialog2" data-role="button" data-inline="true">D</a>
                </div><!--center-button div--> 



                 <script type="text/javascript"> 
                            $(document).delegate('#opendialog2', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Incorrect!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#' data-theme='a' data-icon='arrow-l'>Try Again</a>" +
                                        "<a rel='close' data-role='button' href='#question3' data-theme='a' data-icon='check'>Next Question</a>"    
                                  })
                                })
                  </script><!-- incorrect question 2 div-->  

                  <script type="text/javascript"> 
                            $(document).delegate('#opendialog2a', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Correct!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#question3' data-theme='a' data-icon='check'>Next Question</a>"
                                  })
                                })
                  </script> <!-- correct question 2 div-->    

        </div><!--content div-->
            
        <div data-role="footer" data-theme="a" data-position="fixed">       
                <div data-role="navbar">
                    <ul>
                        <li class="ui-disabled"><a href="rules.php">Rules</a></li>
                        <li><a href="skills.php">Skills</a></li>
                        <li><a href="endurance.php">Endurance</a></li>
                    </ul>
                </div><!-- /navbar -->
        </div><!-- /footer -->

    </div><!--page Question 2 div-->

    <!-- Question 3 -->
    
    <div data-role="page" data-theme="a" id="question3">
        
        <a href="menu.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div id="topheadericon">
            <a href="menu.php" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
                <a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->

    <div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->          
              <img src="images/rulestesttxt.png" width="112" height="30" alt="Rules Test">
          <h3>What is the referee whistle signal for a major penalty?</h3>          
            <ul>                    
                <li>a. No whistle signal</li>                   
                <li>b. Two rapid whistle blasts</li>                
                <li>c. One long whistle blast</li>              
                <li>d. Two long whistle blasts</li>
                    </ul>

                <div class="center-button">
                        <a href="#" id="opendialog3" data-role="button" data-inline="true">A</a>
                        <a href="#" id="opendialog3a" data-role="button" data-inline="true">B</a>
                        <a href="#" id="opendialog3" data-role="button" data-inline="true">C</a>
                        <a href="#" id="opendialog3" data-role="button" data-inline="true">D</a>
                </div><!--center-button div--> 

                <script type="text/javascript"> 
                            $(document).delegate('#opendialog3', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Incorrect!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#' data-theme='a' data-icon='arrow-l'>Try Again</a>" +
                                        "<a rel='close' data-role='button' href='#question4' data-theme='a' data-icon='check'>Next Question</a>"    
                                  })
                                })
                  </script><!-- incorrect question 3 div-->  

                  <script type="text/javascript"> 
                            $(document).delegate('#opendialog3a', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Correct!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#question4' data-theme='a' data-icon='check'>Next Question</a>"
                                  })
                                })
                  </script> <!-- correct question 3 div-->    

        </div><!--content div-->
            
        <div data-role="footer" data-theme="a" data-position="fixed">       
                <div data-role="navbar">
                    <ul>
                        <li class="ui-disabled"><a href="rules.php">Rules</a></li>
                        <li><a href="skills.php">Skills</a></li>
                        <li><a href="endurance.php">Endurance</a></li>
                    </ul>
                </div><!-- /navbar -->
        </div><!-- /footer -->
   </div><!--page Question 3 div-->


<!-- Question 4 -->
    
    <div data-role="page" data-theme="a" id="question4">
        
        <a href="menu.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div id="topheadericon">
            <a href="menu.php" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
                <a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->

    <div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->          
              <img src="images/rulestesttxt.png" width="112" height="30" alt="Rules Test">
          <h3>True or False?  A Jammer must stay in-bounds to remain Lead Jammer.</h3>  
                    <div class="center-button">
                        <a href="#" id="opendialog4" data-role="button" data-inline="true">True</a>
                        <a href="#" id="opendialog4a" data-role="button" data-inline="true">False</a>
                </div><!--center-button div--> 

                <script type="text/javascript"> 
                            $(document).delegate('#opendialog4', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Incorrect!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#' data-theme='a' data-icon='arrow-l'>Try Again</a>" +
                                        "<a rel='close' data-role='button' href='#question5' data-theme='a' data-icon='check'>Next Question</a>"    
                                  })
                                })
                  </script><!-- incorrect question 4 div-->  

                  <script type="text/javascript"> 
                            $(document).delegate('#opendialog4a', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Correct!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#question5' data-theme='a' data-icon='check'>Next Question</a>"
                                  })
                                })
                  </script> <!-- correct question 4 div-->     
        </div><!--content div-->
            
        <div data-role="footer" data-theme="a" data-position="fixed">       
                <div data-role="navbar">
                    <ul>
                        <li class="ui-disabled"><a href="rules.php">Rules</a></li>
                        <li><a href="skills.php">Skills</a></li>
                        <li><a href="endurance.php">Endurance</a></li>
                    </ul>
                </div><!-- /navbar -->
        </div><!-- /footer -->
    </div><!--page Question 4 div-->


<!-- Question 5 -->
    
    <div data-role="page" data-theme="a" id="question5">
        
        <a href="menu.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div id="topheadericon">
            <a href="menu.php" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
                <a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->

    <div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->          
              <img src="images/rulestesttxt.png" width="112" height="30" alt="Rules Test">
          <h3>True or False?  If a skater is illegally blocked outside of the engagement zone she may legally counter-block.</h3>   
                    <div class="center-button">
                        <a href="#" id="opendialog5a" data-role="button" data-inline="true">True</a>
                        <a href="#" id="opendialog5" data-role="button" data-inline="true">False</a>
                </div><!--center-button div--> 


                <script type="text/javascript"> 
                            $(document).delegate('#opendialog5', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Incorrect!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#' data-theme='a' data-icon='arrow-l'>Try Again</a>" +
                                        "<a rel='close' data-role='button' href='#question1' data-theme='a' data-icon='check'>Start the quiz over</a>"    
                                  })
                                })
                  </script><!-- incorrect question 5 div-->  

                  <script type="text/javascript"> 
                            $(document).delegate('#opendialog5a', 'click', function() {
                                  $('<div>').simpledialog2({
                                    mode: 'blank',
                                    headerText: 'Correct!',
                                    headerClose: false,
                                    blankContent : 
                                        "<a rel='close' data-role='button' href='#question1' data-theme='a' data-icon='check'>Start the quiz over</a>"
                                  })
                                })
                  </script> <!-- correct question 5 div-->     

        </div><!--content div-->
            
        <div data-role="footer" data-theme="a" data-position="fixed">       
                <div data-role="navbar">
                    <ul>
                        <li class="ui-disabled"><a href="rules.php">Rules</a></li>
                        <li><a href="skills.php">Skills</a></li>
                        <li><a href="endurance.php">Endurance</a></li>
                    </ul>
                </div><!-- /navbar -->
        </div><!-- /footer -->
    </div><!--page Question 5 div-->

</body>
</html>