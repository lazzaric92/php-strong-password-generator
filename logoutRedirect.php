<?php 
require_once __DIR__ . "/src/utils.php";
require_once __DIR__ . "/src/functions.php";
session_start();

if(!empty($_SESSION["user"]) && !empty($_SESSION["password"]) && checkUserInfo($users, $_SESSION["user"], "username", $_SESSION["password"], "password")){
    session_unset();
    header ('Location: ./index.php');
} else {
    session_unset();
    header ('Location: ./login.php');
}
?>