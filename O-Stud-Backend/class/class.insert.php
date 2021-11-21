<?php
/* 
This class connects to the database by extending the database class.
Enables the insert functionality in the database.
*/
include '../classes/db.php';
class CreateClass extends database{
    private $dbconnect;

    //intialize the database connection
    function __construct()
    {
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    }


    //Enable the insert functionality by running the insert query with parameters given
    function ClassCreate($name,$date,$link){
        $connection= $this->dbconnect->connect();

        $stmt= $connection->prepare('INSERT INTO classes(name,date,link) VALUES (?,?,?)');

        $classArray=array($name,$date,$link);

        //checks if the query statements doesnot execute
        if(!$stmt->execute($classArray)){
            $stmt=null;
            
            //Redirects and show the error in the url
            header('location: ../classView.php?error=stmtfailed');
            exit();
    }
    
    $stmt=null;
    }
}
