<?php
$conn = mysqli_connect("localhost","root","","php_database");

if(!$conn){
    echo "database is not connected";
}
?>