<?php
include("connection.php");

$id = $_GET['id'];

$query = "DELETE FROM `php_todolist` WHERE `id` = $id";
$result = mysqli_query($conn, $query);

if($result){
    // Redirect back to index.php after delete
    header("location: index.php");
    exit;
} else {
    echo "Failed to delete.";
}
?>