<?php
/* 
This class checks for the validation of inputs
*/
include "Metime.insert.php";
class MetimeControl extends CreateMetime{
// Parameters that would be accepted
    private $Name;
    private $Date;
    private $setTodo;
//instantiate the variables
    function __construct($Name,$Date){
        $this->Name= $Name;
        $this->Date= $Date;
        $setTodo= new CreateMetime();
        $this->setTodo=$setTodo;
    }

// checks if the Name input is empty
    function emptyInput(){
        $result='';

        if (empty($this->Name)){
            return $result= false;
        }
        else{
            return $result= true;
        }

        return $result;
    }
 
    //runs the functions that insert into the metime table if no errors
    function metimeInsert(){
        if ($this->emptyInput()== false){
            header('location: ../MetimeView.php?error=empty Name field');
            exit();
        }
        $this->setTodo->InsertMetime($this->Name,$this->Date);
    }

}

$test= new MetimeControl('me','');
$test->metimeInsert();