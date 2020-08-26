<?php
    include('includes/general.php');

    if($user){
        header('Location: index.php');
    }

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query_check_exist_user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    if(mysqli_num_rows($query_check_exist_user)){
        
        echo "
            <script>
                $('#formRegister .alertRegister').html('Username exists');
            </script>   
        ";
    }else{
        $password = md5($password);
        $query_create_user = mysqli_query($conn, "INSERT INTO users VALUES (
            '',
            '$username',
            '$password',
            '$date_current' 
        )");
        if($query_create_user){
            echo '
            <script>
                alert("Successfully register")
            </script>
            ';
        }else{
            echo '
            <script>
                alert("Failed register")
            </script>
            ';
        }
    }
?>
