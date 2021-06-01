c<?php

  if (!isset($_GET['module'])|| $_GET['module']=='')
    $_GET['module']='konten';
?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/jumbotron/">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

     
    <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
     
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">UAS PROWEB ISTIANA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
         
        <?php  
            if (empty($_COOKIE["cookie_user"]) && empty($_COOKIE["cookie_pass"])) {
          ?>
           <form class="navbar-form navbar-right" action="?module=setcookie" method="POST">
            <input type="text" class="form-control" name="user" placeholder="Username...">
            <input type="Password" class="form-control" name="pwd" placeholder="Password...">
            <input type="submit" class="btn btn-success" value="Login">
            </form>
          <?php } else {
           ?>
             <form class="navbar-form navbar-right" action="?module=logout" method="POST">
            <input type="submit" class="btn btn-success" value="logout">
            </form>
          <?php } ?>

        </div><!--/.navbar-collapse -->
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container-fluid" <?php if (empty($_COOKIE["cookie_user"]) && empty($_COOKIE["cookie_pass"]))
        {echo 'style="visibility: hidden"'; } ?>
    > 
    
        
          <!-- <h1 class="page-header">Dashboard</h1> -->
          <?php require_once('file_php/'.$_GET['module'].'.php'); ?>
        
        </div>

      <hr>

      <footer>
        <p>&copy; 2021 Istiana Salsabila.</p>
      </footer>
      
    </div>
    </div>
 
  </div><!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
