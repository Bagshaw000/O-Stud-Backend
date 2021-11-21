<?php
/* 
This class connects to the database by extending the database class.
Enables the insert functionality in the database.
*/
include '../classes/db.php';
class CreateTodo extends database{
    private $dbconnect;


    //Initialize the database class
    function __construct()
    {
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    }

    //Enable the insert functionality by running the insert query with parameters given
    function InsertTodo($name,$date){
        $connection= $this->dbconnect->connect();

        $stmt= $connection->prepare('INSERT INTO todo(name,date) VALUES (?,?)');

        $todoArray=array($name,$date);

        //checks if the query statements doesnot execute
        if(!$stmt->execute($todoArray)){
            $stmt=null;

            //Redirects and show the error in the url
            header('location: ../todoView.php?error=stmtfailed');
            exit();
    }
    
    $stmt=null;
    }
}
