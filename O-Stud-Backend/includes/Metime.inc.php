<?php
session_start(); 
$date;
if(isset($_POST["submit"])){
    //Grabbing the data from the user
    $name=$_POST["name"];
    $date=$_POST['date'];

   
    //Instantiate SignupContr class

    include "../Metime/MetimeControl.php";
     $todo= new MetimeControl($name,$date);


    //Running error handlers and user signup
    $todo->metimeInsert();

    function storedate(){
        return $date= $_POST['date'];
       };

    function storeLink(){
        return $link=$_POST['link'];
    };

    function storeName(){
        return $name=$_POST['name'];
    };
    //Moving to home page
    header("location:../MainInterface/MeTime.php?error=none");
};

