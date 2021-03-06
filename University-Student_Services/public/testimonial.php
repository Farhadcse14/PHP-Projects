<?php 
    require_once('../include/initialize.php');
    $print = "disabled";
    if(isset($_GET['sid'])){
       $sid = $_GET['sid'];
       $req = Request::find_by_sid($sid);
    }



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet/style.css">

    <title>Student Home</title>
  </head>
  <body>
    <div class="cng-bg">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3 text-center">Request For Testimonial</h1>
                <p class="lead text-center">Welcome to student section</p>
                <div class=" panel panel-default">
                <div class="panel-heading">
            
                    <span class="float-right"><a class="btn btn-primary" href="student_home.php">Back</a></span>
                </div>
              </div>
              
            </div>
        </div>
    </div>

        
       <div class="container">
            <div class="row justify-content-md-center" style="margin-bottom: 60px;">
                <div class="col-md-auto">
                  <h3>To get the testimonial you have to request to Chairman Sir.</h3>
                </div>
            </div>
            <form action="testimonial_sub.php" method="POST">
                <div class="text-center">
                    <a href="testimonial_sub.php?sid=<?php echo $sid ?>" class="btn btn-secondary btn-lg center-block <?php if ( $req->req_tm > 0 ) echo $print ?>" style="width:160px;"> Request </a>
                </div>
            <form>
            <div class="row justify-content-md-center" style="margin-top: 10px;">
                <div class="text-center">
                   <?php if($req)if($req->req_tm == 2): ?>
                    <a href="testmonial_pdf.php?sid=<?php echo $sid ?>" class="btn btn-secondary btn-lg center-block "> Dowonload </a>
                    <h3>Your Testimonial is Ready</h3>
                  <?php endif; ?>
                </div>
       </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>