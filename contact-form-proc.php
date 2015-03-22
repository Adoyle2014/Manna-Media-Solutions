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

mail(bool mail ( 'nick@mannams.com' , 'New form submission from MMS' , "Contact Info: Name: $name, Email: $email, Message: $messege". "from: $name <$email>" );

header("Location: thank-you.html");

<script>
document.contactform.onsubmit=function() {
    if(document.contactform.fullname.value == '')
    {
        return false;
    }
    else if(document.contactform.email.value == '')
    {
        return false;
    }
    else if(document.contactform.messege.value == '')
    {
        return false;
    }
    return true;
}
</script>