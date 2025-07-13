<?php
include("connection.php");

$alert = false;

if(isset($_POST) && $_POST) {
    
    $title = $_POST['title'];
    $description = $_POST['description'];

    if($title && $description) {

        $query = "INSERT INTO `php_todolist` (`title`, `description`) VALUES ('$title','$description')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            $alert = true;
            $messgae = 'Database error while adding task';
            $bg_color = 'danger';
        }else{
            $alert = true;
            $messgae = 'Your task has been added to your list';
            $bg_color = 'success';
        }
    } else { 
        $alert = true;
        $messgae = 'Please enter both title and description';
        $bg_color = 'warning';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>To-Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <h1 class="text-center text-light py-3">To-Do List</h1>
                    <?php
                        if($alert) {
                            echo '
                                <div class="alert alert-' . $bg_color .' alert-dismissible fade show" role="alert">
                                    <strong>' . ucfirst($bg_color) . ':</strong> ' . $messgae . '.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            ';
                        }
                    ?>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-light">Title</label>
                        <input type="text" class="form-control bg-white bg-opacity-50" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-light">Description</label>
                        <textarea class="form-control bg-white bg-opacity-50" rows="3" name="description"></textarea>
                    </div>
                    <button class="btn btn-primary fw-bold text-light">Submit</button>
                </form>
            </div>
        </div>

        <?php
            $query = "SELECT * FROM `php_todolist`";
            $result = mysqli_query($conn, $query);
        ?>

        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-light py-3">To-Do List Table</h1>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="bg-white bg-opacity-50 fw-bold">SNo.</th>
                            <th class="bg-white bg-opacity-50 fw-bold">Title</th>
                            <th class="bg-white bg-opacity-50 fw-bold">Description</th>
                            <th class="bg-white bg-opacity-50 fw-bold">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sno = 0;
                            while($row = mysqli_fetch_assoc($result)) { 
                                $sno++;
                        ?>
                        <tr>
                            <td class="bg-white bg-opacity-50"><?php echo $sno ?></td>
                            <td class="bg-white bg-opacity-50"><?php echo $row['title'] ?></td>
                            <td class="bg-white bg-opacity-50"><?php echo $row['description']; ?></td>
                            <td class="bg-white bg-opacity-50">
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>