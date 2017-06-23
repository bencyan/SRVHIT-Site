
<!DOCTYPE html>
<?php 
session_start();
?> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="favicon.ico">

    <title>Create Account for Students - SRVHIT</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="custom.css" rel="stylesheet">

   
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
          <a class="navbar" href="index.html">SRVHIT</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Search" class="form-control" name = "searchtags">
            </div>
            <button type="submit" class="btn btn-primary"><a class="glyphicon glyphicon-search" href ="search_results_page.html"></a> </button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class = "container loginContainer">
     <div class = "row">
      <div class = "col-md-3">
      </div>
    

    
      <div class = "col-md-6">
        <form class="form-signin" action="student_create_account_page.php" method="get">
        <h2 class="form-signin-heading">Edit Student Profile</h2>
        <label for = "inputSummary" class ="sr-only">Summary</label>
        <input type ="text" id = "inputSummary" class ="form-control" placeholder = "<?php echo $_SESSION["summary"] ?>" name = "summary"required autofocus>
        <label for = "inputInterests" class ="sr-only">Interests</label>
        <input type"text" id = "inputInterests" class ="form-control" placeholder ="<?php echo $_SESSION["interests"] ?>" name = "interests"required>
        <label for="inputExperienceHeader" class = "sr-only">Experience Header</label>
        <input type"text" id = "experienceHeader" class ="form-control" placeholder ="<?php echo $_SESSION["experienceHeader"] ?>" name = "experienceHeader" required>
  

        <button class="btn btn-lg btn-primary btn-block" type="submit" href="student_create_account_page.php">Sign up</button>
      </form>
    </div>

      <div class = "col-md-3">
      </div>
    </div>

    <hr>

    <footer>
        <p>&copy; Procrastination Squad</p>
    </footer>
    </div><!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>