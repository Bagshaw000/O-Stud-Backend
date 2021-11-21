<?php
include '../classes/db.php';
/* 
This class connects to the databases.
Enaables the delete function on the database

*/
class MeetingUpdate extends database
{
    private $dbconnect;


    //Intialize the database connection
    function __construct()
    {
        $dbconnect = new database();
        $this->dbconnect = $dbconnect;
    }

    //deletes form the database
    function deleteMeeting()
    {
        $connection = $this->dbconnect->connect();

        $id = $_POST['id'] ?? null;

        if (!$id) {
            header('Location: MetimeView.php');
            exit;
        }
        //runs the delete query
        $statement = $connection->prepare('DELETE FROM meetings WHERE id=:id');

        //this binds the id from the database to the variable @$id
        $statement->bindValue(':id', $id);

        //executes the query
        $statement->execute();
        //redirects to the classView when the process is over
        header('Location: ../MainInterface/Meetings.php');
    }
}
$test= new MeetingUpdate();
$test->deleteMeeting();