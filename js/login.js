function login(user, pass){
    $username = user;
    $password = pass;

    $.ajax({
        url: 'login.php',
        type: 'post',
        data: {
            usernamel : $username,
            passwordl : $password
        },
        success : function(result){
            $('#formLogin .btn-login').html('Login');
            $('#formLogin .alertLogin').html(result);
        }
    });
}

//bat su kien click vao login
$('#formLogin .btn-login').click(function(){
    $username = $('#usernameLogin').val();
    $password = $('#passwordLogin').val();
    if($username == '' || $password == ''){
        $('#formLogin .alertLogin').html('Please fill all fields');
    }else{
        $('#formLogin .btn-login').html('Loading ... ');
        login($username, $password);
    }
})