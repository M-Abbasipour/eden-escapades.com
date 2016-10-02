<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
    $output_top = $output_btm = $output_mid = "";
    include "config.php";
    include "process.php";
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div id="wrapper">
    
    <a href="verification.php"><img src="EELogo1.png" class="img-responsive" alt="Responsive image"></a>

    <div id="submit-form" class="form-wrapper col-lg-6 col-lg-offset-3">
        <h3>Enter Invitation Code</h3>
        <p>Enter your unique invite code and email address using the form below.</p>
        <form id="form" method="post" action="#">
            <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" id="code" name="code" placeholder="Unique invite code" required>
            </div>
            <div class="form-group">
            <button type="submit" name="submit-btn" class="btn btn-default">Submit</button>
        </form>
        <p></p>
        <div id="response"><?php echo $output_top ?></div>
            
        <hr>    
            
        <div>
            <h3>Request Invitation Code</h3>
            <p>Don't have a unique invite code yet?<br>Complete the form below and we'll be in touch.</p>
        </div>        
            
        <form id="form" method="post" action="#">
            <div class="form-group">
            <input type="email" class="form-control" name="email" id="email-request" placeholder="Email">
            </div>
            <div class="form-group">
            <button type="submit" name="request-btn" class="btn btn-default">Request Code</button>
        </form>
        <div id="response"><?php echo $output_mid ?></div>
            
        <hr>    
            
        <div>
            <p></p>
        </div>        
            
        <form id="form" method="post" action="#">
            <h3>Login</h3>
            <div class="form-group">
            <input type="email" class="form-control" name="email" id="email-login" placeholder="Email">
            </div>
            <div class="form-group">
            <button type="submit" name="login-btn" class="btn btn-default">Login</button>
        </form>
        <div id="response"><?php echo $output_btm ?></div>

    </div>
            
    <hr>
    
</div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>