 <?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/helpers.inc.php';
?>

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

        <a href="../menu.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div id="topheadericon">
        	<a href="../menu/" data-role="button" data-icon="home" data-iconpos="notext" data-mini="true" data-inline="true">Home</a>
            <a href="#" data-rel="back" data-role="button" data-icon="back" data-iconpos="notext" data-mini="true" data-inline="true">Back</a>            
        </div>
        
		<div data-role="header" data-position="inline">
		</div><!--end of header -->

        <div data-role="content" data-theme="a" id="pagecontent"><!--container with transparent grey background-->
        
           	<img src="../images/skillstesttxt.png" width="118" height="30"><br>
            In order to pass the skills test, you must be able to perform all of these skills.<br><br>


	 <form action="" method="post" data-ajax="false">
      
      <fieldset>
        <br/>
        <?php for ($i = 0; $i < count($skills); $i++): ?>
          <div>
            <label for="skill<?php echo $i; ?>"><input type="checkbox"
              name="skills[]" id="skill<?php echo $i; ?>"
              value="<?php htmlout($skills[$i]['id']); ?>"<?php
              if ($skills[$i]['selected'])
              {
                echo ' checked';
              }
              ?>><?php htmlout($skills[$i]['description']); ?></label>
              
          </div>
        <?php endfor; ?>
      </fieldset>
      <div>
        <input type="hidden" name="id" value="<?php
            htmlout($id); ?>">
        <input type="submit" value="Save">
      </div>
    </form>


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