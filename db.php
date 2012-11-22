<?php namespace App\DB

$config = array(
	'username' => 'ontrackadmin',
	'password' => 'M0bileapp2012',
	'database' => 'ontrack_db'
);

function connect($config)
{
	try {
		$conn = new \PDO('mysql:host=mysql.ontrackrollerderby.com;dbname=' . $config['database'],
						$config['username'],
						$config['password']);

		$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

		return $conn;
	} catch(Exception $e) {
		return false;
	}
}