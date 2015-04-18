<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "nick@mannamediasolutions.com";
 
    $email_subject = "Email inquiry from website";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />

        <title>MMS-Thank You</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/email_form.css">
    </head>

<!-- NAVBAR
================================================== -->
    <body>
            <div class="navbar-wrapper">
                    <div class="container">
                        <nav class="navbar navbar-inverse navbar-static-top">                   
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="Index.html"><img id="brand" src="img/MannaMedia_Logo-white.png"></a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="About.html">About</a></li>                             
                                    <li><a href="Portfolio.html">Portfolio</a></li>
                                    <li><a href="Rates.html">Pricing</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">  
                                            <li class="dropdown-li nohover"><a class="dropdown-a" href="Contact.html">Contact Us</a></li>
                                            <li class="divider"></li>
                                            <li class="divider-title nohover">Or Follow Us On:</li>
                                            <li class="divider"></li>
                                            <li class="dropdown-li nohover"><a class="pull-left dropdown-a" href="https://www.facebook.com/mannamediasolutions?fref=ts" target="_blank">Facebook</a><img class="li-logo pull-right" src="img/facebook-glossy.png"></li>
                                            <li class="dropdown-li nohover"><a class="pull-left dropdown-a" href="https://www.youtube.com/user/mannamediasolutions" target="_blank">YouTube</a><img class="li-logo pull-right" src="img/youtube-glossy.png"></li>                                   
                                        </ul>
                                    </li>
                                </ul>
                            </div>                  
                        </nav>
                    </div>
                </div>      

        <!-- MMS Banner
        ================================================ -->

        <div id="manna">
            <div id="manna-container">
                <img src="img/Manna-Media.png">
            </div><!-- /.manna -->
        </div>

        <!-- Content
        ================================================== -->
        <div class="container">
            <div class="content-container">
                <div id="thanks">
                    <p><h1>Thank You</h1></p><br/>
                    <p><h2>Your form has been submitted.  We will get back to you as soon as possible.</h2></p>
                </div>
            </div>
        </div>

        <!-- Footer
        ================================================== -->

        <footer class="footer">
                    <div class="container">
                        <p class="col-md-4" id="copyright"><span class=" copyright">2015 Manna Media Solutions </span> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>              
                        <p class="col-md-4" id="designer"><a href="doyleware.com">Doyleware | Designs 2015</a></p>
                        <p class="col-md-4" id="back-to-top"><a href="#">Back to top</a></p>
                    </div>
                </footer>
        </div><!-- /.container -->
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/portfolio.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
    </body>
</html> 
 
<?php
 
}
 
?>
