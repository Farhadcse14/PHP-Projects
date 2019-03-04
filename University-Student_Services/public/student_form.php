<?php 
  require_once('../include/initialize.php');
   
  if(isset($_POST['submit'])){
      $student_info = new Student();
      $student_info->first_name = $_POST['first_name'];
      $student_info->last_name = $_POST['last_name'];
      $student_info->roll = $_POST['roll'];
      $student_info->dept = $_POST['dept'];
      $student_info->dob = $_POST['dob'];
      $student_info->registration = $_POST['registration'];
      $student_info->f_name = $_POST['f_name'];
      $student_info->m_name = $_POST['m_name'];
      $student_info->email = $_POST['email'];
      $student_info->session = $_POST['session'];
      $student_info->pre_add = $_POST['pre_add'];
      $student_info->par_add = $_POST['par_add'];
      $student_info->b_group = $_POST['b_group'];
      $student_info->hall = $_POST['hall'];
      $student_info->resident = $_POST['resident'];
      $student_info->room = $_POST['room'];
      $student_info->gender = $_POST['gender'];
      $student_info->mobile = $_POST['mobile'];
      $student_info->cgpa = $_POST['cgpa'];
      $student_info->username = $_POST['username'];
      $student_info->password = mds($_POST['password']);
      $student_info->cpassword = md5($_POST['cpassword']);

      
      $student_info->attach_file($_FILES['file_upload']);
      $student_info->attach_file2($_FILES['file_upload2']);

      
      if($student_info->save()){
          $session->message("Your are Registered Succfully");
          redirect_to("../admin/index.php");
      }else{
        $message = join("<br/>", $photo->errors);
      }
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
    <style>
      span{
        position: absolute;
      }
    </style>
    <title>Student Form</title>
  </head>
  <body>
    
    <div>
      <img src="set.jpg">
    </div>

        <div class="btns float-right" style="margin-right: 60px; margin-top: 20px;">
            <a href="../admin/index.php" class="btn btn-info">Back</a>
        </div>
    
    <div class="container">
      
        <h3 class="text-center display-4" style="margin-top: 30px; margin-bottom: 35px; font-weight: bold; color: #001a00; text-decoration: underline #0c2e66;">Student Registration Form</h3>

        

        <form action="student_form.php" enctype="multipart/form-data" method="POST">
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">First Name: </label>
            <div class="col-sm-4">
              <input type="text" name="first_name" class="form-control" id="inputPassword" placeholder="First Name">
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Last Name:</label>
            <div class="col-sm-4 ">
              <input type="text" name="last_name"  id="staticEmail" class="form-control" placeholder="Last Name">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center">Roll No:</label>
            <div class="col-sm-4">
              <input type="text" name="roll" class="form-control" id="inputPassword" placeholder="Roll" required="1">
            </div>

            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Blood Group: </label>
            <div class="col-sm-4">
            <select id="inputState" name="b_group" class="form-control" required="1">
                <option selected>Choose...</option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>o-</option>
                <option>AB+</option>
                <option>AB-</option>
              </select>
            </div>

          </div>

           <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center">Session:</label>
            <div class="col-sm-4">
              <input type="text" name="session" class="form-control" id="inputPassword" placeholder="Session" required="1">
            </div>

            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Date-of-birth: </label>
            <div class="col-sm-4">
              <input type="date" name="dob" class="form-control" id="inputPassword" required="1">
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Registration No:</label>
            <div class="col-sm-10 ">
              <input type="text" name="registration"  id="staticEmail" class="form-control" placeholder="Registration No" required="1">
            </div>
          </div>

          <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label text-center">Department: </label>
            <div class="col-sm-10">
              <select id="inputState" name="dept" class="form-control" required="1">
                <option selected>Choose...</option>
                <option>Computer Science and Engineering</option>
                <option>Petroleum and Mining Engineering</option>
                <option>Chemical Engineering</option>
                <option>Electrical and Electronic Engineering</option>
                <option>Industrial and Production Engineering</option>
                <option>Biomedical Engineering</option>
                <option>Textile Engineering</option>
                <option>Fisheries and Marine Bioscience</option>
                <option>Pharmacy</option>
                <option>Genetic Engineering and Biotechnology</option>
                <option>Microbiology</option>
                <option>Environmental Science and Technology</option>
                <option>Nutrition and Food Technology</option>
                <option>Agro Product Processing Technology</option>
                <option>Mathematics</option>
                <option>Physics</option>
                <option>Chemistry</option>
                <option>Bangla</option>
                <option>English</option>
                <option>Accounting and Information Systems</option>
                <option>Management</option>
                <option>Finance and Banking</option>
                <option>Physical Education and Sports Science</option>
              </select>
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Father Name:</label>
            <div class="col-sm-10 ">
              <input type="text" name="f_name"  id="staticEmail" class="form-control" placeholder="Father Name" required="1">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Mother Name:</label>
            <div class="col-sm-10 ">
              <input type="text" name="m_name"  id="staticEmail" class="form-control" placeholder="Mother Name" required="1">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Present Address:</label>
            <div class="col-sm-10 ">
              <input type="text" name="pre_add"  id="staticEmail" class="form-control" placeholder="Present Address" required="1">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Parmenant Address:</label>
            <div class="col-sm-10 ">
              <input type="text" name="par_add"  id="staticEmail" class="form-control" placeholder="Parmenant Address" required="1">
            </div>
          </div>

          <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label text-center">Residential Hall: </label>
            <div class="col-sm-4">
              <select id="inputState" name="hall" class="form-control">
                <option selected>Choose...</option>
                <option>Shaheed Mashiur Rahman Hall</option>
                <option>Sheikh Hasina Hall</option>
              </select>
            </div>
            
          <label for="inputPassword" class="col-sm-2 col-form-label text-center">Stay Mode: </label>
            <div class="col-sm-4">
              <select id="inputState" name="resident" class="form-control">
                <option selected>Choose...</option>
                <option>Residential</option>
                <option>Non Residential</option>
              </select>
            </div>
          </div>



          <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label text-center">Room No: </label>
            <div class="col-sm-4">
              <input type="text" name="room" class="form-control" id="inputPassword" placeholder="Room No">
            </div>
            
          <label for="inputPassword" class="col-sm-2 col-form-label text-center">Gender: </label>
            <div class="col-sm-4">
              <select id="inputState" name="gender" class="form-control">
                <option selected>Choose...</option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Contact No: </label>
            <div class="col-sm-4">
              <input type="text" name="mobile" class="form-control" id="inputPassword" placeholder="Mobile No">
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Final CGPA:</label>
            <div class="col-sm-4 ">
              <input type="text" name="cgpa"  id="staticEmail" class="form-control" placeholder="CGPA Out of 4.0">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center">Email:</label>
            <div class="col-sm-4">
              <input type="email" name="email" class="form-control" id="inputPassword" placeholder="Email" required="1">
            </div>
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Password: </label>
            <div class="col-sm-4">
              <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required="1">
            </div>
          </div>

          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center">Username:</label>
            <div class="col-sm-4">
              <input type="text" name="username" class="form-control" id="inputPassword" placeholder="Username">
            </div>

            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Confirm Password: </label>
            <div class="col-sm-4">
              <input type="password" name="cpassword" class="form-control" id="inputPassword" placeholder="Confirm Password">
            </div>
          </div>

            

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Upload Image:</label>
            <div class="col-sm-2">
              <div class="custom-file btn btn-primary">
              <span id="1st">Profile Picture</span> <input type="file" class="custom-file-input" id="f1" name="file_upload" required="1">
                
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Upload Signature:</label>
            <div class="col-sm-2">
              <div class="custom-file btn btn-primary">
                <span id="2nd" >Signature</span><input type="file" id="f2" class="custom-file-input" name="file_upload2" required="1">
                
              </div>
            </div>
          </div>

          <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label text-center"></label>
            <div class="col-sm-10">
              <div class="custom-file">
                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit"/>
              </div>
            </div>
          </div>
        </form>
        

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(function() {
        $('#f1').change(function(){
          var t = $(this).val();
          var labelText = 'File : ' + t.substr(12, t.length);
          $('#1st').text(labelText);
        })

         $('#f2').change(function(){
          var t = $(this).val();
          var labelText = 'File : ' + t.substr(12, t.length);
          $('#2nd').text(labelText);
        })
      });
    </script>
  </body>
</html>