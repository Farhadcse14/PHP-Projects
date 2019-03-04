
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>logged in</title>
</head>
<body>
<div class="jumbotron">
    <h3 class="display-3 text-center">Admin LogIn</h3>
</div>
<?php
    include "../admin/Database.php";
    $db = new Database();
?>
<?php
    session_start();
    if (isset($_POST['submit'])){
        $email = $_POST['username'];
        $pass = $_POST['password'];

        $query = "select * from admin where email = '$email' and password = '$pass'";
        $da = $db->select($query);
        $res = $da->fetch_assoc();
        if ($da != false){
            $row = mysqli_num_rows($da);
            if ($row>0){
               if ($res['mode'] == "library"){
                   header('Location:../public/librarian_section.php');
               }elseif ($res['mode'] == "provost"){
                   header('Location:../public/provost_section.php');
               }elseif ($res['mode'] == "teacher"){
                   header('Location:../public/teacher_home.php');
               }
               elseif ($res['mode'] == "admin"){
                   header('Location:../admin/index.php');
               }
               else{
                   echo "No Data Found";
               }

            }else{

            }
        }else{
            echo "username and password not match";
        }
    }
?>

<form action="" method="POST">
    <div class="form-group row justify-content-md-center">
        <label for="inputPassword" class="col-sm-1 col-form-label text-center text-center">Username:</label>
        <div class="col-sm-3">
            <input type="text" name="username" class="form-control" required="1">
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="inputPassword" class="col-sm-1 col-form-label text-center text-center" >Password:</label>
        <div class="col-sm-3">
            <input type="password" name="password" class="form-control" required="1">
        </div>
    </div>

    <div class="form-group row justify-content-md-center">
        <label for="inputPassword" class="col-sm-1 col-form-label text-center text-center"></label>
        <div class="col-sm-3">
            <input type="submit" name="submit" class="btn btn-primary" value="LogIn" >

        </div>
    </div>


</form>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>