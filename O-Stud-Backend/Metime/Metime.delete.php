<?php
include '../classes/db.php';
/* 
This class connects to the databases.
Enaables the delete function on the database

*/
class metimeDelete extends database{
     private $dbconnect;
    
    
    //Intialize the database connection
    function __construct(){
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    
    }

    //deletes form the database
    function deleteMeeting(){
        $connection=$this->dbconnect->connect();

        $id =$_POST['id']?? null;

        if(!$id){
             header('Location:../MainInterface/MeTime.php');
            exit;
        }
        
        //runs the delete query
        $statement=$connection-> prepare ('DELETE FROM metime WHERE id=:id');
 
        //this binds the id from the database to the variable @$id
        $statement->bindValue(':id',$id);
       
        //executes the query
        $statement->execute();

        header('Location:../MainInterface/MeTime.php');
        }
}

$test= new metimeDelete();
$test->deleteMeeting();
