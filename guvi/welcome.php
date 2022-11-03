<?php

require 'useractions.php';
session_start();


if(isset($_SESSION['loggedin'])){
    $user = fetch_user_by_email($_SESSION['email']);

?>    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome</title>
        <style>
            .cen{
                text-align: center;
                margin-bottom: 2rem;
            }
            body{
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-image: linear-gradient(300deg, gray 20%,yellow 90%);
            }
            .cent{
                text-decoration: none;
                text-align: center;
                margin-top: 2rem;                
            }
            .rem{
                text-decoration: none;
                padding: 1rem;
                background-color: black;
                color: bisque;
            }
            .rem:hover{
                background-color: bisque;
                color: black;
            }


        </style>
    </head>
    <body>
        <h1 class="cen">Welcome <?=($user['gender']==='Male')?"Mr. ":"Ms. "?><?=$user['first_name']." ".$user['last_name']?></h1>
        <h3 class="cen">Email : <?=$user['email']?></h3>
        <h3 class="cen">Age : <?=$user['age']?></h3>
        <h3 class="cen">Gender : <?=$user['gender']?></h3>
        <h3 class="cen">Phone : <?=$user['mobile']?></h3>
        <h2 class="cent"><a href="/guvi/logout.php" class="rem">Logout</a></h2>
    </body>
    </html>
<?php
}

?>




