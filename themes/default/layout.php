<?php

use models\Users;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/themes/default/style.css">
    <title>Document</title>
</head>

<body>
    
    <header class="header">
        <div>
            <a href="/main/index" class="logo">Team<span>X</span></a>
        </div>
        <div>
            <?php if (empty(Users::getLoginedUser())) : ?>
                    <a href="/users/login" class="btn btn-theme ml-3" title="Your Boards"><i class="fas fa-sign-in-alt"></i> Login</a>
            <?php else : ?>
                <a href="/users/logout" class="btn btn-theme ml-3" title="Your Boards"><i class="fas fa-sign-out-alt"></i> Logout</a>
            <?php endif; ?>
            
        </div>
    </header>




    <main>
        <?= $content ?>
    </main>
    
    <footer> </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
</body>

</html>