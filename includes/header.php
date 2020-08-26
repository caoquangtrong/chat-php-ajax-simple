<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script src="css/style.css"></script>
</head>
<body>
    <?php
        //neu ton tai user
        if($user){
            echo '
                <div class="main-menu">
                    <h1>Messenger</h1>
                    <a href="logout.php">Log out</a>
                </div>
                <div class="clearfix"></div>
            ';
        }else{
            echo '
                <div class="main-menu">
                    <h1>Messenger</h1>
                </div>
            ';
        }
    ?>

