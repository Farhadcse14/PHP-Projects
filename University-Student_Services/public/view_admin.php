<?php 
    require_once('../include/initialize.php');
    if(isset($_GET['sid'])){
        $std = Student::find_by_id($_GET['sid']);
        
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
                <h1 class="display-3 text-center">Student Section</h1>
                <p class="lead text-center">Welcome to student section</p>

                
                
            </div>
        </div>

    </div>

    
    

    <div class="container">

        <div class=" panel panel-default">
                <div class="panel-heading">
            
                    <span class="float-right"><a class="btn btn-primary" href="provost_section.php">Back</a></span>
                    
                </div>
            </div>
        
        <div class="row">
            <div class="col-md-3">
                <img alt="student_image" src="image/<?php echo $std->img_name; ?>" alt="Profile Image" class="img-thumbnail float-left">
            </div>

            <table class="table table-bordered col-md-9">
                    <tbody>
                    
                        <tr>
                            <td>Name</td>
                            <td><?php echo $std->first_name." ".$std->last_name; ?></td>
                        </tr>
                        <tr>
                            <td>Roll</td>
                            <td><?php echo $std->roll; ?></td>
                        </tr>
                        <tr>
                            <td>Registration No</td>
                            <td><?php echo $std->registration; ?></td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td><?php echo $std->dept; ?></td>
                        </tr>
                        <tr>
                            <td>Resident Hall</td>
                            <td><?php echo $std->session; ?></td>
                        </tr>
                        <tr>
                            <td>Stay Mode</td>
                            <td><?php echo $std->resident; ?></td>
                        </tr>
                        <tr>
                            <td>Room No</td>
                            <td><?php echo $std->room; ?></td>
                        </tr>
                        <tr>
                            <td>Father's Name</td>
                            <td><?php echo $std->f_name; ?></td>
                        </tr>
                        <tr>
                            <td>Mother's Name</td>
                            <td><?php echo $std->m_name; ?></td>
                        </tr>
                        <tr>
                            <td>Present Address</td>
                            <td><?php echo $std->pre_add; ?></td>
                        </tr>
                            <tr>
                                <td>Permanent Address</td>
                                <td><?php echo $std->par_add; ?></td>
                            </tr>
                        <tr>
                            <td>Date-of-birth</td>
                            <td><?php echo $std->dob; ?></td>
                        </tr>
                        <tr>
                            <td>Blood Group</td>
                            <td><?php echo $std->b_group; ?></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?php echo $std->gender; ?></td>
                        </tr>
                        <tr>
                            <td>Contact No</td>
                            <td><?php echo $std->mobile; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $std->email; ?></td>
                        </tr>
                        <tr>
                            <td>CGPA</td>
                            <td><?php echo $std->cgpa;?></td>
                        </tr>

                        <tr>
                            <td>Signature</td>
                            <td><img height="50" width="200" alt="signature" src="image/<?php echo $std->sig_name;?>" ></td>
                        </tr>
                    </tbody>
                </table>
        </div>
        <?php echo output_message($message); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>