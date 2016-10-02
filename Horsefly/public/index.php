<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Hello, world!</h1>
      
    <h1>This is an H1 HEADER</h1>
    <h2>This is an H2 HEADER</h2>
    <h3>This is an H3 HEADER</h3>
    <h4>This is an H4 HEADER</h4>
    <h5>This is an H5 HEADER</h5>
    <h6>This is an H6 HEADER</h6>
    <p>This is body text</p>

    <h1 class="h1">This is a bootstrap H1 HEADER</h1>
    <h2 class="h2">This is a bootstrap H2 HEADER</h2>
    <h3 class="h3">This is a bootstrap H3 HEADER</h3>
    <h4 class="h4">This is a bootstrap H4 HEADER</h4>
    <h5 class="h5">This is a bootstrap H5 HEADER</h5>
    <h6 class="h6">This is a bootstrap H6 HEADER</h6>
    <small>This is SMALL text</small>
    <p>This is paragraph text</p>
    <h2>This is <small>H2 SMALL</small> text</p></h2>
    <p>This is <mark>highlighted</mark> text</p>
    <p class="text-capitalize">This is to capitalise text</p>
    <p class="text-uppercase">This is Uppercased text.</p> 
    
     <!-- Email -->
    <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
        <label for="email" class="control-label">Your email address</label>
        <input type="text" name="email" class="form-control" id="email" value="">
   
    </div>
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>