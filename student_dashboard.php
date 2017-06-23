
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

    <title>Student Dashboard - SRVHIT</title>

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
            <button type="submit" class="btn btn-primary"><a class="glyphicon glyphicon-search" href ="search_results_page.php"></a> </button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<div class = "container dashboardcontainer">
  <div class = "row">
      <div class="col-lg-3 col-md-3">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://lut.im/7JCpw12uUT/mY0Mb78SvSIcjvkf.png" width="300px" height="300px"> <!--- ECHO $profilepicture here -->
                        </div>

                      <div class="studentFileUpload fileUpload btn btn-success">
                        <h5> Edit Student Picture </h5>
                        <input type="file" class="upload" name ="profilepicture"/>
                      </div>

                      <a href = "company_edit_profile.html" class = "editProfile btn btn-primary">
                        Edit Profile
                      </a>


                        <div class="media-body">
                            <hr>
                            <h3><strong>Name</strong></h3>
                            <p> <?php echo $_SESSION["name"]; ?> </p>
                            <hr>
                            <h3><strong>College</strong></h3>
                            <p><?php echo $_SESSION["college"]; ?> </p>
                            <hr>
                            <h3><strong>Major</strong></h3>
                             <p><?php echo $_SESSION["major"]; ?> </p>
                            <hr>
                            <h3><strong>Email</strong></h3>
                             <p><?php echo $_SESSION["email"]; ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class = "col-md-9">
      <div class="panel panel-default">
        <div class = "panel panel-default summary all">
                  <h4>Summary</h4>
                  <p>
                    <?php echo $_SESSION["summary"]; ?>
                  </p>
                  
               </div>
               <div class = "panel panel-default all ">
                  <h4>Interested In</h4>
                  <p>
                     Software Engineering, Web Development, Mobile App Development
                  </p>
               </div>
                <div class = "panel panel-default all">
                  <h4>Experience</h4>
                  <ul class="list-group">
                     <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">
                           Software Engineer at SRVHIT
                        </h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                           te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                     </a>
                      <a class="list-group-item inactive-link" href="#">
                        <h4 class="list-group-item-heading">
                           Civil Engineer at 
                        </h4>
                        <p class="list-group-item-text">
                           Lorem ipsum dolor sit amet, ea vel prima adhuc, scripta liberavisse ea quo, te vel vidit mollis complectitur. Quis verear mel ne. Munere vituperata vis cu, 
                           te pri duis timeam scaevola, nam postea diceret ne. Cum ex quod aliquip mediocritatem, mei habemus persecuti mediocritatem ei.
                        </p>
                     </a>
                  </ul>
               </div>
               <div class = "panel panel-default all">
                  <h4>Areas of Knowledge</h4>
                  <ul class="list-group">
                     <li class="list-group-item"> <?php echo $_SESSION["areasOfKnowledge"] ?> </li>
               </div>
               
            
            <div class = "panel panel-default all">
                  <h4>Extracurricular Activities</h4>
                  <ul class="list-group">
                     <li class="list-group-item"> Lorem ipsum dolor sit amet, ea vel prima adhuc </li>
               </div>
             </ul>
            </div>
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