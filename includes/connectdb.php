<?php
    $conn = mysqli_connect('localhost', 'root', '', 'messenger') or die("Could not connect to database");
    if($conn){
        echo '<script>console.log("Database: OK");</script>';
    }
?>