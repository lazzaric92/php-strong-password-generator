<?php 
require_once __DIR__ . "/src/utils.php";
require_once __DIR__ . "/src/functions.php";
session_start();

if(isset($_GET["userName"]) && isset($_GET["password"])){
    $_SESSION["user"] = $_GET["userName"];
    $_SESSION["password"] = $_GET["password"];
};

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <header class="p-3">
            <nav>
                <ul class="nav d-flex">
                    <li class="me-3" >
                        <a href="./index.php">Home</a>    
                    </li>
                </ul>
            </nav>
        </header>
        <main class="p-3">
            <div class="container">
                <div class="row">
                    <form action="./login.php" method="GET" class="col-6 mx-auto pt-4">
                        <div class="form-floating mb-3">
                            <input type="text" name="userName" id="userName" class="form-control" placeholder="Username">
                            <label for="userName">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <label for="password">Password</label>
                        </div>

                        <?php 
                            if(!empty($_SESSION["user"]) && !empty($_SESSION["password"])){
                                if(checkUserInfo($users, $_SESSION["user"], "username", $_SESSION["password"], "password")){
                                    header("Location: ./index.php");
                                } else { ?>
                                    <p class="text-danger">Invalid username or password</p>
                            <?php }
                            }; 
                        ?>

                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>       
            </div>
        </main>
    </div>
</body>
</html>