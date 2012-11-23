<?php
function dbConnect($usertype, $connectionType = 'mysqli') {
  $host = 'mysql.ontrackrollerderby.com';
  $db = 'ontrack_db';
  if ($usertype  == 'read') {
	$user = 'ontrackadmin';
	$pwd = 'M0bileapp2012';
  } elseif ($usertype == 'write') {
	$user = 'ontrackadmin';
	$pwd = 'M0bileapp2012';
  } else {
	exit('Unrecognized connection type');
  }
  if ($connectionType == 'mysqli') {
	return new mysqli($host, $user, $pwd, $db) or die ('Cannot open database');
  } else {
    try {
      return new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
    } catch (PDOException $e) {
      echo 'Cannot connect to database';
      exit;
    }
  }
}
