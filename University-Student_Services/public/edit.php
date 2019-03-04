<?php
    include '../admin/Database.php';
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
                <a href="student_home.php" class="btn btn-info">Back</a>
            </div>

<div class="container">
    <h3 class="text-center display-4" style="margin-top: 30px; margin-bottom: 35px; font-weight: bold; color: #001a00; text-decoration: underline #0c2e66;">Update Student Information</h3>
    <?php
        if (isset($_POST['submit'])){
            $id = $_GET['id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $roll = $_POST['roll'];
            $b_group = $_POST['b_group'];
            $session = $_POST['session'];
            $dob = $_POST['dob'];
            $registration = $_POST['registration'];
            $dept = $_POST['dept'];
            $f_name = $_POST['f_name'];
            $m_name = $_POST['m_name'];
            $pre_add = $_POST['pre_add'];
            $par_add = $_POST['par_add'];
            $hall = $_POST['hall'];
            $resident = $_POST['resident'];
            $room = $_POST['room'];
            $gender = $_POST['gender'];
            $cgpa = $_POST['cgpa'];
            $email = $_POST['email'];
            $username = $_POST['username'];


            $query = "update student_info
             set
             first_name = '$first_name',
             last_name = '$last_name',
             roll = '$roll',
             b_group = '$b_group',
             session = '$session',
             dob = '$dob',
             registration = '$registration',
             dept = '$dept',
             f_name = '$f_name',
             m_name = '$m_name',
             pre_add = '$pre_add',
             par_add = '$par_add',
             hall = '$hall',
             resident = '$resident',
             room = '$room',
             gender = '$gender',
             cgpa = '$cgpa',
             email = '$email',
             username = '$username'
             where s_id = '$id'
              ";
            $upd = $db->update($query);
            if ($upd){
                header('Location:student_home.php');
            }else{
               echo "Profile Not update";
            }

        }
    ?>
    <form action=""  method="POST">
        <?php
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $query = "select * from student_info where s_id = $id";
            $get = $db->select($query);
            if ($result = $get->fetch_assoc()){


        ?>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">First Name: </label>
            <div class="col-sm-4">
                <input type="text" name="first_name" class="form-control" id="inputPassword" placeholder="First Name" value="<?php echo $result['first_name'];?>">
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Last Name:</label>
            <div class="col-sm-4 ">
                <input type="text" name="last_name"  id="staticEmail" class="form-control" placeholder="Last Name" value="<?php echo $result['last_name'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center">Roll No:</label>
            <div class="col-sm-4">
                <input type="text" name="roll" class="form-control" id="inputPassword" placeholder="Roll" required="1" value="<?php echo $result['roll'];?>">
            </div>

            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Blood Group: </label>
            <div class="col-sm-4">
                <select id="inputState" name="b_group" class="form-control" required="1" >

                    <option
                       <?php if($result['b_group']) {?>
                        selected
                   <?php } ?> value="<?php echo $result['b_group'];?>"><?php echo $result['b_group'];?></option>
                    <option >A+</option>
                    <option >A-</option>
                    <option >B+</option>
                    <option >B-</option>
                    <option >O+</option>
                    <option >O-</option>
                    <option >AB+</option>
                    <option >AB-</option>
                </select>
            </div>

        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center" >Session:</label>
            <div class="col-sm-4">
                <input type="text" name="session" class="form-control" id="inputPassword" placeholder="Session" required="1" value="<?php echo $result['session'];?>">
            </div>

            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Date-of-birth: </label>
            <div class="col-sm-4">
                <input type="date" name="dob" class="form-control" id="inputPassword" required="1" value="<?php echo $result['dob'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Registration No:</label>
            <div class="col-sm-10 ">
                <input type="text" name="registration"  id="staticEmail" class="form-control" placeholder="Registration No" required="1" value="<?php echo $result['registration'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Department: </label>
            <div class="col-sm-10">
                <select id="inputState" name="dept" class="form-control" required="1" >
                    <option
                        <?php if($result['dept']) {?>
                            selected
                        <?php } ?> value="<?php echo $result['dept'];?>"><?php echo $result['dept'];?></option>
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
                <input type="text" name="f_name"  id="staticEmail" class="form-control" placeholder="Father Name" required="1" value="<?php echo $result['f_name'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Mother Name:</label>
            <div class="col-sm-10 ">
                <input type="text" name="m_name"  id="staticEmail" class="form-control" placeholder="Mother Name" required="1" value="<?php echo $result['m_name'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Present Address:</label>
            <div class="col-sm-10 ">
                <input type="text" name="pre_add"  id="staticEmail" class="form-control" placeholder="Present Address" required="1" value="<?php echo $result['pre_add'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Parmenant Address:</label>
            <div class="col-sm-10 ">
                <input type="text" name="par_add"  id="staticEmail" class="form-control" placeholder="Parmenant Address" required="1" value="<?php echo $result['par_add'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Residential Hall: </label>
            <div class="col-sm-4">
                <select id="inputState" name="hall" class="form-control" >
                    <option
                        <?php if($result['hall']) {?>
                            selected
                        <?php } ?> value="<?php echo $result['hall'];?>"><?php echo $result['hall'];?></option>
                    <option>Shaheed Mashiur Rahman Hall</option>
                    <option>Sheikh Hasina Hall</option>
                </select>
            </div>

            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Stay Mode: </label>
            <div class="col-sm-4">
                <select id="inputState" name="resident" class="form-control">
                    <option
                        <?php if($result['resident']) {?>
                            selected
                        <?php } ?> value="<?php echo $result['hall'];?>"><?php echo $result['resident'];?></option>
                    <option>Residential</option>
                    <option>Non Residential</option>
                </select>
            </div>
        </div>



        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Room No: </label>
            <div class="col-sm-4">
                <input type="text" name="room" class="form-control" id="inputPassword" placeholder="Room No" value="<?php echo $result['room'];?>">
            </div>

            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Gender: </label>
            <div class="col-sm-4">
                <select id="inputState" name="gender" class="form-control" value="<?php echo $result['gender'];?>" required>
                    <option
                        <?php if($result['gender']) {?>
                            selected
                        <?php } ?> value="<?php echo $result['gender'];?>"><?php echo $result['gender'];?></option>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center">Contact No: </label>
            <div class="col-sm-4">
                <input type="text" name="mobile" class="form-control" id="inputPassword" placeholder="Mobile No" value="<?php echo $result['mobile'];?>">
            </div>

            <label for="staticEmail" class="col-sm-2 col-form-label text-center">Final CGPA:</label>
            <div class="col-sm-4 ">
                <input type="text" name="cgpa"  id="staticEmail" class="form-control" placeholder="CGPA Out of 4.0" value="<?php echo $result['cgpa'];?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center">Email:</label>
            <div class="col-sm-4">
                <input type="email" name="email" class="form-control" id="inputPassword" placeholder="Email" required="1" value="<?php echo $result['email'];?>">
            </div>
            <label for="inputPassword" class="col-sm-2 col-form-label text-center text-center">Username:</label>
            <div class="col-sm-4">
                <input type="text" name="username" class="form-control" id="inputPassword" placeholder="Username" value="<?php echo $result['username'];?>">
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
        <?php }} ?>
    </form>


</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>