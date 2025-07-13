<?php
include("connection.php");

$id = $_GET['id'];

$query = "SELECT * FROM `php_todolist` WHERE `id` = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

if(isset($_POST) && $_POST){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE `php_todolist` SET `title`='$title', `description`='$description' WHERE `id`=$id";
    $result = mysqli_query($conn, $query);

    if($result){
        header("location: index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit To-Do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <h1 class="text-center text-light py-3">Edit To-Do List</h1>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-light">Title</label>
                        <input type="text" class="form-control bg-white bg-opacity-50" name="title" value="<?php echo $row['title']?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-light">Description</label>
                        <textarea class="form-control bg-white bg-opacity-50" rows="3" name="description"><?php echo $row['description']?></textarea>
                    </div>
                    <button class="btn btn-primary fw-bold text-light">Update</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>