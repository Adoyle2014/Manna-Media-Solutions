<?php

     $autoResponse = true; //if set to true auto response email will be sent, if you don't want autoresponse set it to false
    $autoResponseSubject = "Demo Contact Form With HTML Email"; 
    $autoResponseMessage = "<html>
<head>
    <title>This is your HTML email!</title>
</head>
<body style='background:#0066cc url(http://eliwedel.com/ewpd/demos/jquery-contact-form-with-html-email/gradient.png) top left repeat-x; text-align:center;'>
    <div style='width:700px; font-family:Arial, Helvetica, sans-serif; font-size:44px; color:#CCC; text-align:center; margin:0 auto; padding:20px;'>THIS IS YOUR</div>
    <img src='http://eliwedel.com/ewpd/demos/jquery-contact-form-with-html-email/HTML.png' width='679' height='206' />
</body>
</html>
";
    $autoResponseHeaders  = "From: adam@DoyleWare.com"."\r\n";
    // To send HTML mail, the Content-type header must be set
    $autoResponseHeaders .= "MIME-Version: 1.0"."\r\n";
    $autoResponseHeaders .= "Content-type: text/html; charset=iso-8859-1"."\r\n";
    
    //we need to get our variables first
    $email_to =   $_POST['email'];
    $name     =   $_POST['name'];
    $time = date('F j, Y g:i:s A T', time());
    
    $message = "From: $name "."\r\n"."Email: $email_to "."\r\n"."Time: $time "."\r\n";

    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know
     who are we replying to. *//*
    $headers  = "From: $email_to"."\r\n";
    $headers .= "Reply-To: $email_to"."\r\n";
    

    if(mail('adam@DoyleWare.com', 'HTML Email Sent!', $name . ' just had an HTML sent to them', $headers)){
        if($autoResponse === true){
            mail($email_to, $autoResponseSubject, $autoResponseMessage, $autoResponseHeaders);
        }
        echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent
    }
    /*
$autoResponse = true; //if set to true auto response email will be sent, if you don't want autoresponse set it to false


// Comment out everything above and uncomment below to send a plain email
   $autoResponseSubject = "Demo Contact Form"; 
    $autoResponseMessage = "Hi, thank you testing the JQuery Contact Form Demo.";
    $autoResponseHeaders = "From: adam@Doyleware.com";  
    
    //we need to get our variables first
    $email_to =   'adam@DoyleWare.com'; //the address to which the email will be sent
    $topic    =   $_POST['topic'];
    $name     =   $_POST['name'];
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $msg  =   $_POST['message'];
    $time = date('F j, Y g:i:s A T', time());
    
    $message = "From: $name \r\nEmail: $email \r\nTime: $time \r\nTopic: $topic \r\nMessage: \r\n$msg";

    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know
     who are we replying to. */
     /*
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    

    if(mail($email_to, $subject, $message, $headers)){
        if($autoResponse === true){
            mail($email, $autoResponseSubject, $autoResponseMessage, $autoResponseHeaders);
        }
        echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent
    }
*/

?>