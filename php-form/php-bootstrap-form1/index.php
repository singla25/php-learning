<?php
include ('connection.php');

$success = false;

if($_POST){
    $firstName = $_POST['first_name'];
    $lasttName = $_POST['last_name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `project1` (`first_name`, `last_name`, `email`, `phone_number`, `description`) VALUE ('$firstName', '$lasttName', '$email', '$phoneNumber', '$description')";

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

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #a7a7a7">
    <div class="d-flex justify-content-center align-items-center">
        <div class="container m-4 p-4 ">
            <h1 class="text-center">Form in Bootstrap</h1>

            <form action="project3_form/formbootstrap/form.php" method="post">
                <div class="row m-auto mt-4">
                    <!-- Name -->
                        <div class="row">
                            <!-- first name -->
                            <div class="col-12 col-sm-6 my-3">
                                <label for="fname" class="form-label fw-bold">First Name</label>
                                <input class="form-control" id="fname" name="first_name" type="text" placeholder="First Name" required>
                            </div>

                            <!-- last name -->
                            <div class="col-12 col-sm-6 my-3">
                                <label for="lname" class="form-label fw-bold">Last Name</label>
                                <input class="form-control" id="lname" name="last_name" type="text" placeholder="Last Name" required>
                            </div>
                        </div>

                    <!-- email -->
                    <div class="mt-3">
                        <div class="row">
                            
                            <div class="col-12 my-3">
                                <label for="inputEmail4" class="form-label fw-bold">Email</label>
                                <input type="email" name="email" class="form-control" id="inputEmail4">
                            </div>

                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div class="col-12 col-sm-6 col-lg-4 my-3">
                        <label for="phone" class="form-label fw-bold">Phone Number</label>
                        <input type="tel" name="phone_number" class="form-control" id="phone" placeholder="Enter your phone number"
                            pattern="[0-9]{10}" required>
                    </div>

                    <!-- Pin Code -->
                    <div class="col-12 col-sm-6 col-lg-4 my-3">
                        <label for="pincode" class="form-label fw-bold">Pin Code</label>
                        <input type="tel" name="pincode" class="form-control" id="pincode" placeholder="Enter your pin code"
                            pattern="[0-9]{6}" required>
                    </div>

                    <!-- Address -->
                    <div class="col-12 my-3">
                        <label for="input" class="form-label fw-bold">Address</label>
                        <textarea name="description" name="description" id="input" class="form-control" placeholder="description"
                            rows="3"></textarea>
                    </div>

                    <!-- submit button -->
                    <div class="col-12 my-3 d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary fw-bold" style="width: 135px">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>