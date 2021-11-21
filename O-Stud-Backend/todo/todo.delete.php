<?php
include '../classes/db.php';
/* 
This class connects to the databases.
Enaables the delete function on the database

*/
class todoDelete extends database{
     private $dbconnect;
    
    
   //Initialize the database class
    function __construct(){
        $dbconnect= new database();
        $this->dbconnect= $dbconnect;
    
    }

    //this function connects to the database with a function from the extended class
    function deleteMeeting(){
        $connection=$this->dbconnect->connect();

        $id =$_POST['id']?? null;

        if(!$id){
            header('Location: ../MainInterface/ToDoList.php');
            exit;
        }
        
        //runs the delete query
        $statement=$connection-> prepare ('DELETE FROM todo WHERE id=:id');
       
        //this binds the id from the database to the variable @$id
        $statement->bindValue(':id',$id);

        //executes the query
        $statement->execute();

         //redirects to the classView when the process is over
        header('Location:../MainInterface/ToDoList.php');
        }
}

$test= new todoDelete();
$test->deleteMeeting();
