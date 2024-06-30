<?php 
require_once __DIR__ . "/src/utils.php";
require_once __DIR__ . "/src/functions.php";
session_start();

if(!empty($_SESSION["user"])){
    var_dump($_SESSION["user"]);
}

// var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Session</title>
</head>
<body>
    <div class="container">
        <header class="p-3">
            <nav>
                <ul class="nav d-flex">
                    <li class="me-3" >
                        <a href="./index.php">Home</a>    
                    </li>
                    <li class="me-3">
                        <a href="./login.php">Login</a> 
                    </li>
                    <li class="me-3">
                        <a href="./logout.php">Logout</a> 
                    </li>
                </ul>
            </nav>
        </header>
        <main class="p-4">
            <?php 
                if(!empty($_SESSION["user"]) && !empty($_SESSION["password"])){
                    if(checkUserInfo($users, $_SESSION["user"], "username", $_SESSION["password"], "password")){ ?>
                        <h2 class="text-center fw-bold mb-3">Welcome back <?php echo $_SESSION["user"] ?>!</h2>
                        <p class="text-center fs-4 text-decoration-underline">Here's the page content &darr;</p>
                    <?php } else { ?>
                        <p class="fw-bold text-danger text-center mb-3 fs-3">Invalid username or password</p>
                        <p class="fw-bold text-center fs-4">You shall not see the page content!</p>
                    <?php } 
                } else { ?>
                    <p class="fw-bold text-center fs-3">Log in to see the page content</p>
                <?php } 
            ?>
        </main>
    </div>
</body>
</html>