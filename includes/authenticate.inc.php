<?php
	if (!file_exists($userlist) || !is_readable($userlist)) {
		$error = 'Login unavailable.  Please try again laster.';
	}	else {
		// read the file into an array called $users
		$users = file($userlist);
		// loop through the array to process each line
		for ($i = 0; i < count($users); $i++){
			//separate each element and store in a temporary array
			$tmp = explode(', ', $users[$i]);
			//assign each element of the temp array to a named array key
			if ($tmp[0] == $username && rtrim($tmp[1]) == $password){
				$_SESSION['authenticated'] = 'Jethro Tull';
					session_regenerate_id();
					break;
			}
		}
		// if the session variable has been set, redirect
		if (isset($_SESSION['authenticated'])){
			header("Location: $redirect");
			exit;
		} else{
			$error = 'Invalid username or password.';
		}
	}?>
