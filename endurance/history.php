<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/access.inc.php';

    if (!userIsLoggedIn())
    {
      include '../login.html.php';
      exit();
    }


    include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';
    
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


            try
                {
                  $result = $pdo->query("SELECT record_date, time, laps FROM endurance WHERE userid = {$id} ORDER BY record_date");
                }
                catch (PDOException $e)
                {
                  $error = 'Error fetching records from the database!';
                  include 'error.html.php';
                  exit();
                }

                foreach ($result as $row)
                {
                  $records[] = array('record_date' => $row['record_date'], 'time' => $row['time'], 'laps' => $row['laps']);
                }     
                ?>