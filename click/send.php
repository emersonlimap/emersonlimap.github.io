<?php
session_start();

    $email_to = "contact@clickrealestatemedia.com";
    $name     = $_POST['name'];  
    $email    = $_POST['email'];
    $subject   = $_POST['subject'];
    $message    = $_POST['message'];
    
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if(mail($email_to, $subject, $message, $headers)){
        echo "Thank you! Our team will contact you soon.";       
    } 
    else{
        echo "Ops! Something get wrong. Please consider calling or text us : +1 XXX-XXX-XXX";     
    }  
?>
