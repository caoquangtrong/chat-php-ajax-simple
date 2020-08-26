<?php
    include('includes/general.php');
    include('includes/header.php');

    //layout
    if($user){
        //hien thi tro chuyen
        echo '
            <div class="main-chat"></div>
            <div class="box-chat">
                <form method="POST" id="formSendMsg" onsubmit="return false;">
                    <input type="text" id="textSendMsg" placeholder="Nhap noi dung tin nhan...">
                </form>
            </div>    
        ';
    }else{
        //register
        echo '
            <div class="box-register">
            <p>Register</p>
                <form id="formRegister" method="post"  onsubmit="return false;">
                    <input type="text" placeholder="username" id="usernameRegister">
                    <input type="text" placeholder="password" id="passwordRegister">
                    <button class="btn-register">Register</button>
                    <div class="alertRegister"></div>
                </form>
            </div>
        ';
        echo '
            <div class="box-login">
            <p>Login</p>
                <form method="post" id="formLogin" onsubmit="return false;">
                    <input type="text" placeholder="username" id="usernameLogin">
                    <input type="text" placeholder="password" id="passwordLogin">
                    <button class="btn-login">Login</button>
                    <div class="alertLogin"></div>
                </form>
            </div> 
        ';
    }

    include('includes/footer.php');
?>



