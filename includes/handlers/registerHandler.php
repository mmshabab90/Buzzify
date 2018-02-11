<?php

function sanitizeFormPassword($inputText){
    //for sanitizing the user password
    $inputText = strip_tags($inputText); //gets rid off the html elements
    
    return $inputText;
    
}

function sanitizeFormString($inputText){
    //for sanitizing the string user input data
    $inputText = strip_tags($inputText); //gets rid off the html elements
    $inputText = str_replace(" ", "_", $inputText); //replace all space with empty strings
    $inputText = ucfirst(strtolower($inputText)); //makes the first letter uppercase
    
    return $inputText;
    
}

if(isset($_POST['btnRegister'])){
    //Register button was pressed
    $firstName = sanitizeFormString($_POST['firstName']);
    $lastName = sanitizeFormString($_POST['lastName']);
    $registerEmail = sanitizeFormString($_POST['registerEmail']);
    $confirmEmail = sanitizeFormString($_POST['confirmEmail']);
    $registerPassword = sanitizeFormPassword($_POST['registerPassword']);
    $confirmPassword = sanitizeFormPassword($_POST['confirmPassword']);
    
    $wasSuccessfull = $account->register($firstName, $lastName, $registerEmail, $confirmEmail, $registerPassword, $confirmPassword);

    if($wasSuccessfull == true)
    {
        header("Location: index.php");
    }
    //echo $firstName. " ". $lastName. " ". $registerEmail. " ". $confirmEmail. " ". $registerPassword. " ". $confirmPassword;
    
}

?>