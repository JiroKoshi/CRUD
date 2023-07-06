<?php
include "dbconn.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `applicants`(`id`, `first_name`, `last_name`, `email`, `gender`) 
    VALUES (NULL,'$first_name','$last_name','$email','$gender')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New Record Created Succesfully");
    }
    else{
        echo "Failed" . mysqli_error($conn);
    }

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .form-label-left {
        text-align: left;
      }
    </style>
  </head>
  <body>
    <nav class="nav navbar-light justify-content-center fs-3 mb-5" style="background-color:#add8e6;">
        Crud Application
    </nav>
    <div class="container">
      <div class="text-center mb-4">
        <h3>Register</h3>
        <p class="text-muted">Fill-up the form below to register</p>
      </div>

        <div class="container d-flex justify-content-center">
          <form action="" method="post" style="width:50vw; min-width: 300px;">
            <div class="row">
              <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Juan">
                
              </div>
              <div class="col">
                <div class="mb-3">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Dela Cruz">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Email:</label>
              <input type="text" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="form-group mb-3">
                <label> Gender: </label> &nbsp;
                <input type="radio" class="form-check-input" name="gender"
                id="male"
                value="male">
                <label for="male" class="form-input-label">Male</label>
                &nbsp;
                <input type="radio" class="form-check-input" name="gender"
                id="female"
                value="female">
                <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
                <button type="submit" class="btn btn-success" name="submit"> Register</button>
                <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
