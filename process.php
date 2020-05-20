<?php

    echo Thank you for your time $_GET["name"];
        

    if (isset($_POST['submit'])) {
            
            
        $to = "rwaters210@gmail.com";
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $txt = $_POST['message'];
        $headers = "From: " .$email . "\r\n" .
        "CC: somebody@example.com";
        
        mail($to, $message, $headers );
        
        header("Location: contact.html");
            
    }

?>