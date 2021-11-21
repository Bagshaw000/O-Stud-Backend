<?php

/**
 *this class get the input from the user frontend
 *Also calls all the other classes
 *Redirects to home page when suggesuflly signed up
 */


if (isset($_POST["Usersubmit"])) {
    //Grabbing the data from the user
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $school = $_POST['school'];
    $password = $_POST['password'];
    $passwordcon = $_POST['passwordcon'];

    echo $firstname;

    //Instantiate SignupContr class

    include "../classes/signupControll.classes.php";
    $signup = new SignUpContr($firstname, $lastname, $school, $email, $password, $passwordcon);


    //Running error handlers and user signup
    $signup->validateInput();

    //Moving to home page
    header("location:../MainInterface/Home.php?error=none");
};
