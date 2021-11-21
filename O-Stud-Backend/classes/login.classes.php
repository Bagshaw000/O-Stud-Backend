<?php

/**
 * This class connects to the database and insert the new user into the database
 */
include "db.php";
class Login extends database
{
  // Insert into the database  the new user 


  public function getUser($email, $password)
  {
    //connecting to the database    
    $dbconnect = new database();
    $connection = $dbconnect->connect();
    $stmt = $connection->prepare('SELECT password FROM  user WHERE email=? ;');

    $dbarray = array($email);

    if (!$stmt->execute($dbarray)) {
      $stmt = null;
      header('location: ../index.php?error=stmtfailed');
      exit();
    }
    //Checking if the user exist
    if ($stmt->rowCount() == 0) {
      $stmt = null;
      header('location: ../index.php?error=usernotfound');
      exit();
    }


    //fetchinf the input forn the database
    $hashed = $stmt->fetchAll(PDO::FETCH_ASSOC);


    //comparing the hashed password and the passwor given by the user
    $checkpwd = password_verify($password, $hashed[0]['password']);




    //check if the password given is correct
    if ($checkpwd == false) {
      $stmt = null;
      header('location: ../LogInPage/LogIn.php?error=wrongpassword');
      exit();
    }
    //If the password is correct we get all the information on that user
    elseif ($checkpwd == true) {
      $stmt = $connection->prepare('SELECT *   FROM  user WHERE email=? ;');
      if (!$stmt->execute($dbarray)) {
        $stmt = null;
        header('location: ../LogInPage/LogIn.php?error=stmtfailed');
        exit();
      }
      // check the number of rows returned that satisfied the query
      if ($stmt->rowCount() == 0) {
        $stmt = null;
        header('location: ../LogInPage/LogIn.php?error=usernotfound');
        exit();
      }
      $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
      session_start();
      $_SESSION['email'] = $user[0]['email'];
      echo $_SESSION['email'];
      $stmt = null;
    }
  }

  //check of the user email already exists in the database

}
