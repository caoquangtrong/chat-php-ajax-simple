<?php
    include('includes/general.php');

    $query_get_msg = mysqli_query($conn, "select * from messages order by id_msg ASC");

    while($row = mysqli_fetch_assoc($query_get_msg)){
        $date_sent = $row['date_sent'];

        if($row['user_from']==$user){
            echo '
				<div class="msg-user" style="color:blue;">
					<p>'.$row['body'].'</p>
					<div class="info-msg-user">
						Bạn - '.$date_sent.'
					</div>
				</div>
				
			';
        }else{
            echo '
				<div class="msg" >
					<p>'.$row['body'].'</p>
					<div class="info-msg">
						'.$date_sent.'
					</div>
				</div>
			';
        }
    }
?>