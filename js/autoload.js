$.ajaxSetup({cache:false});
//thiet lap thoi gian thuc hien vong lap la 1s
setInterval(function(){
    $('.main-chat').load('msglog.php');
},1000);