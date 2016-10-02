<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    $output_top = $output_btm = $output_mid = "";
    include "../includes/config.php";
    include "../includes/process.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Eden Escapades</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<!--
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
-->
    <div id="logo">
        <a href="<?php echo basename($_SERVER['PHP_SELF']); ?>"><img src="../img/EELogo2.png" class="img-responsive" alt="Responsive image"></a>
    </div>
<!--
  </div>
</nav>
-->
      
<div id="wrapper">

    <h2>Thank you for expressing an interest in <br><span class="EETitle">Eden Escapades</span>.</h2>
    
    <p>Our website is currently in development but we require a number of users to test all aspects of the project so far and during the ongoing development.</p>
    
    <p>You have been invited to join this testing process and, as a thank you from us, you are eligible for lifetime membership of Eden Escapades*.</p>
    
    <p>To join the website, you will need to enter your email address and invitation code on our welcome page. This will then enable you to register, and subsequently login, to Eden Escapades. Until the site is live, you will need to access the service through the welcome page using your email address, and then login to the site via the main page. This is to ensure that we can monitor users and their experience before paying customers are introduced.</p>
    
    <p>As part of your free membership, we will periodically send you surveys and emails to test, develop and improve Eden Escapades and we appreciate your honest and prompt feedback.</p>
    <hr>
    <p>If you experience any difficulties or wish to contact the admin team, then please contact us on <mail>admin@eden-escapades.com</mail></p>
    
    <p>Again, thank you in advance for your interest and we hope your enjoy the website!</p>
    
    <p>Admin Team</p>
    <p>Eden Escapades</p>
    
    <hr>
    
    <div id="labels">
        <h4>Your Email:<h3><span class="label label-eden">email@email.com</span></h3></h4>
        <h4>Invite Code:<h3><span class="label label-eden">1212121212</span></h3></h4> 
        <hr>
        <h2><a href="../../v/verification.php"><span class="label label-eden-b">{Enter Eden Escapades}</span></a></h2>
    </div>
    
    <small>*Subject to our terms and conditions</small>
    
</div>
      
<nav id="footer" class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
<!--        <span class="glyphicon glyphicon-envelope btm-link" aria-hidden="true"></span>-->
        
        <span class="btm-link"><a href="#">Contact</a></span>
        <span class="btm-link"><a href="#">T&amp;Cs</a></span>
      <!--  <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a></li>
            <li><a href="#">T&amp;Cs</a></li>
        </ul>-->
    </div>
</nav>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>