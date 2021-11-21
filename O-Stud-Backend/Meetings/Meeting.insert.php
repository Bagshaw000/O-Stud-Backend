<?php
/* 
This class connects to the database by extending the database class.
Enables the insert functionality in the database.
*/
include '../classes/db.php';
class CreateMeeting extends database{
    private $dbconnect;

    //Initialize the database class
    function __construct()
    {
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    }

    //Enable the insert functionality by running the insert query with parameters given
    function MeetingCreate($name,$date,$link){
        $connection= $this->dbconnect->connect();

        $stmt= $connection->prepare('INSERT INTO meetings(name,link,date) VALUES (?,?,?)');

        $meetingArray=array($name,$date,$link);

        //checks if the query statements doesnot execute
        if(!$stmt->execute($meetingArray)){
            $stmt=null;

            //Redirects and show the error in the url
            header('location: ../MetimeView.php?error=stmtfailed');
            exit();
    }
    
    $stmt=null;
    }
}
