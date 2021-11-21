<?php
include "class.insert.php";
/* 
This class does the validation of the 
*/
class classControl extends CreateClass{
// Parameters that would be accepted
    private $Name;
    private $Link;
    private $Date;
    private $setMeeting;
//instantiate the variables
    function __construct($Name,$Link,$Date){
        $this->Name= $Name;
        $this->Link= $Link;
        $this->Date= $Date;
        $setClass= new CreateClass();
        $this->setClass=$setClass;
    }

// check if the Name input is empty
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



    //runs the method fof inserting in to the database from the extended class
    function insertClass(){
        if ($this->emptyInput()== false){
            header(('location: ../ClassView.php?error=empty Name field'));
            exit();
        }
        $this->setClass->ClassCreate($this->Name,$this->Link,$this->Date);
    }

}


