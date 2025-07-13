<?php
include ('connection.php');

$success = false;

if($_POST){
    $firstName = $_POST['first_name'];
    $lasttName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];

    $sql = "INSERT INTO `project2` (`first_name`, `last_name`, `email`, `phone_number`) VALUE ('$firstName', '$lasttName', '$email', '$phoneNumber')";

    $result = mysqli_query($conn, $sql);
    if($result){
        $success = true;
    };
};
if($success){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Holy guacamole!</strong> Successful
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form in php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color:rgba(38, 136, 171, 0.57);">
<h1 class="text-center mt-3">Simple Form</h1>
    <div class="d-flex justify-content-center align-items-center">
      
     <div class="container d-flex justify-content-center align-items-center">
        <form action="" method="post">
            <div class="bg-success bg-gradient p-4 rounded-4">
                <!-- name -->
              <div class="row">
                     <!-- first name -->
                 <div class="col-12 my-3">
                      <label for="fname" class="form-label fw-bold">First Name</label>
                      <input class="form-control" id="fname" name="first_name" type="text" placeholder="First Name" required>
                 </div>
                     <!-- Last Name -->
                 <div class="col-12 my-3">
                      <label for="lname" class="form-label fw-bold">Last Name</label>
                      <input class="form-control" id="lname" name="last_name" type="text" placeholder="Last Name" required>
                </div>
              </div>

              <div class="row">
                <!-- email -->
              <div class="col-12 my-3">
                <label for="inputEmail" class="form-label fw-bold">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail">
              </div>

              <!-- Phone Number -->
              <div class="col-12 my-3">
                <label for="phone" class="form-label fw-bold">Phone Number</label>
                <input type="tel" name="phone_number" class="form-control" id="phone" placeholder="Enter your phone number"
                pattern="[0-9]{10}" required>
              </div>
              </div>

              <!-- submit button -->
               <div class="d-flex justify-content-center align-items-center my-3">
                
               <button type="submit" class="btn btn-primary fw-bold" style="width: 135px">Submit</button>
               </div>
            </div>
        </form>
     </div>
    </div>
   
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>