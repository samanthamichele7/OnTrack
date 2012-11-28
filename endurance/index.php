<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
    '/includes/magicquotes.inc.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

if (!userIsLoggedIn())
{
  include '../login.html.php';
  exit();
}


include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';



if (isset($_POST['submit']))
    {
      include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';


	// Pull User ID
	  try
	  {
	    $sql = "SELECT id FROM users WHERE email ='{$_SESSION['email']}' ";
	    $s = $pdo->prepare($sql);
	    $s->bindValue(':id', $_POST['id']);
	    $s->execute();
	  }
	  catch (PDOException $e)
	  {
	    $error = 'Error fetching user details.';
	    include 'error.html.php';
	    exit();
	  }

	  $row = $s->fetch();

	  $id = $row['id'];


	// Write values in form to database
        try
        {
          $sql = "INSERT INTO endurance (record_date, time, laps, userid) VALUES (:record_date, :time, :laps,:userid)";
          $s = $pdo->prepare($sql);
          $s->bindValue(':record_date', $_POST['mydate']);
          $s->bindValue(':time', $_POST['slider-number']);
          $s->bindValue(':laps', $_POST['slider-time']);
          $s->bindValue(':userid', $id);
          $s->execute();
        }
        catch (PDOException $e)
        { 
         exit('Connection error, because: ' . $e->getMessage()); 
        }
      
      header('Location: index.php');
        exit();
  }







include 'form.html.php';
  exit();