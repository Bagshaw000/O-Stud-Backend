<?php
/* 
This class connects to the database by extending the database class.
Enables the insert functionality in the database.
*/
include '../classes/db.php';
class CreateMetime extends database{
    private $dbconnect;

    //Initialize the database class
    function __construct()
    {
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    }

    //Enable the insert functionality by running the insert query with parameters given
    function InsertMetime($name,$date){
        $connection= $this->dbconnect->connect();

        $stmt= $connection->prepare('INSERT INTO metime(name,date) VALUES (?,?)');

        $metimeArray=array($name,$date);

        //checks if the query statements doesnot execute
        if(!$stmt->execute($metimeArray)){
            $stmt=null;

            //Redirects and show the error in the url
            header('location: ../MainInterface/MeTime.php?error=stmtfailed');
            exit();
    }
    
    $stmt=null;
    }
}
