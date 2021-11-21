<?php
session_start();
$date;
if (isset($_POST["add"])) {
    //Grabbing the data from the user
    $name = $_POST["name"];
    $link = $_POST['link'];
    $date = $_POST['date'];





    //Instantiate SignupContr class

    include "../Meetings/MeetingControl.php";
    $signup = new meetingControl($name, $link, $date);


    //Running error handlers and user signup
    $signup->insertMeeting();

    //Moving to home page
    header("location:../MainInterface/Meetings.php?error=none");
};
