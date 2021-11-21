<?php
session_start();
$date;
if (isset($_POST["submit"])) {
    //Grabbing the data from the user
    $name = $_POST['name'];
    $link = $_POST['link'];
    $date = $_POST['date'];





    //Instantiate SignupContr class

    include "../class/classControl.php";
    $signup = new classControl($name, $link, $date);


    //Running error handlers and user signup
    $signup->insertClass();

    //Moving to home page
    header("location:../MainInterface/Class.php?error=none");
};
