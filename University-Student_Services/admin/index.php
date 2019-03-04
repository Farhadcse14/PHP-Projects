<?php
    include 'Database.php';
    $db = new Database();

    if (isset($_POST['logout'])) {
                session_destroy();
                session_unset();
                header('location: ../admin/login.php');
            }

?>

<?php
  include_once '../admin/Database.php';
  if (isset($_POST['logout'])) {
        session_destroy();
        session_unset();
        header('location:../admin/login.php');
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

    <form action="" method="post">
        <span class="float-right" style="margin-right: 15px; margin-top: 30px;"><input type="submit" value="Logout" name="logout" class="btn btn-info"></span>
    </form>

    <div class="cng-bg">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3 text-center">Admin Section</h1>
                <p class="lead text-center">Welcome to Admin section</p>
            </div>
        </div>

        <div class="btns col-md-4" style="margin-left: 1200px;">
                <a href="../public/student_form.php" class="btn btn-info">Add Student</a>
        </div>

        

        <div class="panel-heading" style="color: green; padding-left: 590px;"><h4></h4></div>

    </div>
    <?php
        if (isset($_GET['delete'])){
            $id = $_GET['delete'];

            $query = "DELETE FROM student_info WHERE s_id=$id";
            $del = $db->delete($query);
            if ($del){
               $msg = $_GET['msg'];
               echo $msg;
            }else{
                echo "Data Not Delete";
            }
        }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Department</th>
                            <th>Gender</th>
                            <th>Mobile No</th>

                            <th>Blood Group</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "select * from student_info";
                        $data = $db->select($query);
                        if ($data){
                            while ($result=$data->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $result['first_name'];?></td>
                        <td><?php echo $result['last_name'];?></td>
                        <td><?php echo $result['roll'];?></td>
                        <td><?php echo $result['registration'];?></td>
                        <td><?php echo $result['dept'];?></td>
                        <td><?php echo $result['gender'];?></td>
                        <td><?php echo $result['mobile'];?></td>

                        <td><?php echo $result['b_group'];?></td>
                        <th>
                            <a href="viewdetails.php?id=<?php echo $result['s_id'];?>" class="btn btn-info">View</a>
                            <a href="editinfo.php?id=<?php echo $result['s_id'];?>" class="btn btn-info">Update</a>
                            <a href="index.php?delete=<?php echo $result['s_id'];?>" class="btn btn-danger">Delete</a>
                        </th>
                    </tr>
                    <?php } }?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>