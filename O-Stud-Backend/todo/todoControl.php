<?php
/* 
This class checks for the validation of inputs
*/
include "todo.insert.php";
class todoControl extends CreateTodo{
    // Parameters that would be accepted
    private $Name;
    private $Date;
    private $setTodo;
    //instantiate the variables
    function __construct($Name,$Date){
        $this->Name= $Name;
        $this->Date= $Date;
        $setTodo= new CreateTodo();
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


    //Insert//runs the functions that insert into the meeting table if no errors
    function TodoInsert(){
        if ($this->emptyInput()== false){
            header('location: ../todoView.php?error=empty Name field');
            exit();
        }
        $this->setTodo->InsertTodo($this->Name,$this->Date);
    }

}

$test= new todoControl('me','');
$test->TodoInsert();