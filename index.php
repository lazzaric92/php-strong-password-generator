<?php 
require_once __DIR__ . "/src/utils.php";
require_once __DIR__ . "/src/functions.php";
session_start();

if(!empty($_SESSION["user"])){
    var_dump($_SESSION["user"]);
}

var_dump($_SESSION);

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
    </div>
</body>
</html>