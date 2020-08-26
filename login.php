<?php
    include('includes/general.php');
    if($user){
        header('Location: index.php');
    }

    $username = mysqli_real_escape_string($conn, $_POST['usernamel']);
    $password = mysqli_real_escape_string($conn, $_POST['passwordl']);

    $password = md5($password);

    $query_check_login = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
    if(mysqli_num_rows($query_check_login)){
        $_SESSION['username']=$username;
        echo '
            <script>
                alert("Successfully login");
                window.location.reload();
            </script>
        ';
    }else{
        echo "
            <script>
                $('#formLogin .alertLogin').html('Username or password not true');
            </script>   
        ";
    }
?>