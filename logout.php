<?php 
session_start();

var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">
    <title>Logout</title>
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
                <?php if(!empty($_SESSION["user"])) { ?>
                    <div class="row">
                        <form action="./logoutRedirect.php" method="GET" class="col-6 mx-auto d-flex flex-column justify-content-center align-items-center">
                            <h3 class="mb-3"> <?php echo $_SESSION["user"] ?>, are you sure you want to log out?</h3>
                            <button class="btn btn-primary">Logout</button>
                        </form >
                    </div>
                <?php } else { ?>
                    <h3 class="text-center">You are not logged in!</h3>
                <?php } ?>
            </div>
            
        </main>
    </div>
</body>
</html>