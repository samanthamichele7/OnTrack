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



if (isset($_POST['skills']))
    {
      include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

      // Pull user_to_skill to check against selected values
      // try
      // {
      //   $sql = "SELECT * FROM user_to_skill WHERE userid = '{$_POST['id']}'";
      //   $s = $pdo->prepare($sql);
      //   $s->execute();
      // }
      // catch (PDOException $e) {
      //   exit('Error fetching data, because: ' . $e->getMessage()); 
      // }

      // $result = $s->fetchAll();

      try
        {
          $sql = "DELETE FROM user_to_skill WHERE userid = '{$_POST['id']}'";
          $s = $pdo->prepare($sql);
          $s->bindValue(':id', $_POST['id']);
          $s->execute();
        }
    catch (PDOException $e)
        {
          $error = 'Error removing obsolete skill entries.';
          include 'error.html.php';
          exit();
        }

      foreach ($_POST['skills'] as $skill)
      {
        try
        {
          $sql = 'INSERT INTO user_to_skill (userid, skillid) VALUES (:userid,:skillid)';
          $s = $pdo->prepare($sql);
          $s->bindValue(':userid', $_POST['id']);
          $s->bindValue(':skillid', $skill);
          $s->execute();
        }
        catch (PDOException $e)
        { 
         exit('Connection error, because: ' . $e->getMessage()); 
        }
      }
      header('Location: index.php');
        exit();
  }


// Pull user id for query
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

// Get list of skills assigned to this user
  try
  {
    $sql = 'SELECT skillid FROM user_to_skill WHERE userid =' . $id;
    $s = $pdo->prepare($sql);
    $s->bindValue(':id', $id);
    $s->execute();
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of skills.';
    include 'error.html.php';
    exit();
  }

  $selectedSkills = array();
  foreach ($s as $row)
  {
    $selectedSkills[] = $row['skillid'];
  }

// Build the list of all skills

  try
  {
    $result = $pdo->query('SELECT id, description FROM skills');
  }
  catch (PDOException $e)
  {
    $error = 'Error fetching list of skills.';
    include 'error.html.php';
    exit();
  }

  foreach ($result as $row)
  {
    $skills[] = array(
      'id' => $row['id'],
      'description' => $row['description'],
      'selected' => in_array($row['id'], $selectedSkills));
  }

  include 'form.html.php';
  exit();









 


