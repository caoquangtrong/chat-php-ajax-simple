function register(user, pass){
    $username = user;
    $password = pass;

    $.ajax({
        url: 'register.php',
        type: 'post',
        data: {
            username : $username,
            password : $password
        },
        success : function(result){
            $('#formRegister .btn-register').html('Register');
            $('#formRegister .alertRegister').html(result);
        }
    });
}

//bat su kien click vao register
$('#formRegister .btn-register').click(function(){
    $username = $('#usernameRegister').val();
    $password = $('#passwordRegister').val();
    if($username == '' || $password == ''){
        $('#formRegister .alertRegister').html('Please fill all fields');
    }else{
        $('#formRegister .btn-register').html('Loading ... ');
        register($username, $password);
    }
})