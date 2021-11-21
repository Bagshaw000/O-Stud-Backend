<?php
/**
 * This class creates a connection to the database
 */
class database{
    public function connect(){
        try{
            $username="root";
            $password="";
            $dbname= "user";
             $host="localhost";
 
           $dsn="mysql:host=$host;dbname=$dbname";

           $dbconnect= new PDO($dsn,$username,$password);
           $dbconnect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
           return $dbconnect;
        }

        catch(PDOException $e){
            print "Error:".$e->getMessage().'<br/>';
            die();
        }

    }
}