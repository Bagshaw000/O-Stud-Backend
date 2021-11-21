<?php
/* 
This class checks for the validation of inputs
*/
include "Meeting.insert.php";
class meetingControl extends CreateMeeting{
    // Parameters that would be accepted
    private $Name;
    private $Link;
    private $Date;
    private $setMeeting;

    //instantiate the variables 
    function __construct($Name, $Link,$Date){
        $this->Name= $Name;
        $this->Link= $Link;
        $this->Date= $Date;
        $setMeeting= new CreateMeeting();
        $this->setMeeting=$setMeeting;
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

    
    //runs the functions that insert into the meeting table if no errors
    function insertMeeting(){
        if ($this->emptyInput()== false){
            header(('location: ../MeetingView.php?error=empty Name field'));
            exit();
        }
        $this->setMeeting->MeetingCreate($this->Name,$this->Link,$this->Date);
    }



}