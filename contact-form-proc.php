<?php

if(empty($_POST['submit']))
{
    echo "Form was not submitted!";
    exit;
}
if(empty($-POST["fullname"]) ||
    empty($_POST["email"]) ||
        empty(_POST["messege"]))
        {
        echo "Please fill in all fields"
        exit;
        }

$name = $_POST["fullname"];
$email = $_POST["email"};
$messege = $_POST["messege"];

mail(bool mail ( 'dominofoe@yahoo.com' , 'New form submission from MMS' , "Contact Info: Name: $name, Email: $email, Message: $messege" )

header("Location: thank-you.html");