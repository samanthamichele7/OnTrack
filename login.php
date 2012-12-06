<?php 
include('includes/helpers.inc.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="favicon.png" rel="SHORTCUT ICON">
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

    <a href="../index.php"><div id="logoheader"></div></a><div id="iconstrip"></div><!--places logo and strip at top and links to menu.php-->
        
        <div data-role="header" data-position="inline">
        </div><!--end of header -->
            
        <div data-role="content" data-theme="a">
            <div id="maincontent">
                <div id="rollergirlimg"><img src="../images/rollergirl.png" /></div><!--end of rollergirl-->
                <div id="navitems">  
                <?php if (isset($loginError)): ?>
                  <p><?php echo $loginError; ?></p>
                <?php endif; ?>
                <form action="" method="post" data-ajax="false">
                  <div>
                    <label for="email">Email: <input type="text" name="email"
                        id="email"></label>
                  </div>
                  <div>
                    <label for="password">Password: <input type="password"
                        name="password" id="password"></label>
                  </div>
                  
                    <input type="hidden" name="action" value="login">
                    <input type="submit" value="Log in">
                  
                </form>
                <a href="../index.php" data-role="button" data-inline="false" data-mini="true">Cancel</a>
              </div><!--end of navitems-->
                
            </div><!--end of maincontent-->
           
        </div><!--end of content-->
            
  </div><!--end of page-->
    
</body>
</html>

