<?php
    //session
    session_start();

    include('connectdb.php');
    date_default_timezone_set('Asia/Saigon');
    $date_current = '';
    $date_current = date("Y-m-d H:i:sa");
    echo "<script>console.log('Time: ".$date_current."')</script>";

    if(isset($_SESSION['username'])){
        $user = $_SESSION['username'];
    }else{
        $user = '';
    }
?>