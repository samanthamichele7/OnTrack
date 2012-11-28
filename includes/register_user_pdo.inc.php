<?php
require_once('includes/CheckPassword.php');

$nameMinChars = 1;
$errors = array();
if (strlen($name) < $nameMinChars) {
  $errors[] = "Please enter your name.";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
    $errors[] = "Please enter a valid email address.";
}


$checkPwd = new Ps2_CheckPassword($password);
$passwordOK = $checkPwd->check();

if (!$passwordOK) {
  $errors = array_merge($errors, $checkPwd->getErrors());
}
if ($password != $retyped) {
  $errors[] = "Your passwords don't match.";
}

if (!$errors) {
        //include the connection file
        require_once("db.inc.php");

        // encrypt the password and salt
        $pwd = md5($_POST['pwd'] . 'otrd');
        
        // prepare SQL statement
        $sql = 'INSERT INTO users (name, email, password) VALUES (:name, :email, :password)';
        $stmt = $pdo->prepare($sql);

        // bind parameters and insert the details into the database
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $pwd, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() == 1){
            $success = "$email has been registered.  You may now log in.";
        } elseif ($stmt->errorCode() == 23000){
            $errors[] = "$email is already in use.  Please choose another username.";
        } else{
            $errors[] = "Sorry, there was a problem with the database.";
        }
}