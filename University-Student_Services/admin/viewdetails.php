<?php
    include "Database.php";
    $db = new Database();

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
                <h1 class="display-3 text-center">Admin Section</h1>
                <p class="lead text-center">Welcome to Admin section</p>
            </div>
        </div>

        <div class="panel-heading" style="color: green; padding-left: 590px;"><h4></h4></div>

    </div>

            <div class="btns float-right" style="margin-right: 100px;">
                <a href="index.php" class="btn btn-info">Back</a>
            </div>

    <div class="container-fluid">
        <div class="row">
<div class="col-md-4"></div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tbody>
                    <?php
                       $id =  $_GET['id'];
                       $query = "select * from student_info where s_id = $id ";
                       $data = $db->select($query);
                        if ($result = $data->fetch_assoc()){
                    ?>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $result['first_name'];?></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $result['last_name'];?></td>
                        </tr>
                        <tr>
                            <td>Roll No</td>
                            <td><?php echo $result['roll'];?></td>
                        </tr>
                        <tr>
                            <td>Registration No</td>
                            <td><?php echo $result['registration'];?></td>
                        </tr>
                        <tr>
                            <td>Department</td>
                            <td><?php echo $result['dept'];?></td>
                        </tr>
                        <tr>
                            <td>Hall</td>
                            <td><?php echo $result['hall'];?></td>
                        </tr>
                        <tr>
                            <td>Resident</td>
                            <td><?php echo $result['resident'];?></td>
                        </tr>
                        <tr>
                            <td>Room No</td>
                            <td><?php echo $result['room'];?></td>
                        </tr>
                        <tr>
                            <td>Gander</td>
                            <td><?php echo $result['gender'];?></td>
                        </tr>
                        <tr>
                            <td>Mobile No</td>
                            <td><?php echo $result['mobile'];?></td>
                        </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td><?php echo $result['dob'];?></td>
                            </tr>
                        <tr>
                            <td>Father Name</td>
                            <td><?php echo $result['f_name'];?></td>
                        </tr>
                        <tr>
                            <td>Mother Name</td>
                            <td><?php echo $result['m_name'];?></td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td><?php echo $result['email'];?></td>
                        </tr>
                        <tr>
                            <td>Session</td>
                            <td><?php echo $result['session'];?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $result['pre_add'];?></td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td><?php echo $result['par_add'];?></td>
                        </tr>
                        <tr>
                            <td>Picture</td>
                            <td><?php echo $result['img_name'];?></td>
                        </tr>
                        <tr>
                            <td>Signature</td>
                            <td><?php echo $result['sig_name'];?></td>
                        </tr>
                        <tr>
                            <td>Blood Group</td>
                            <td><?php echo $result['b_group'];?></td>
                        </tr>
                        <tr>
                            <td>User Name</td>
                            <td><?php echo $result['username'];?></td>
                        </tr>
                        <tr>
                            <td>CGPA</td>
                            <td><?php echo $result['cgpa'];?></td>
                        </tr>

                        <?php }?>
                    </tbody>
                </table>
                
            </div>
            <div class="col-md-3"></div>
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>