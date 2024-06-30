<?php 

function checkUserInfo($usersArray, $sessionUser, $nameProperty, $sessionPassw, $passProperty){
    foreach ($usersArray as $user) {
        if($sessionUser == $user[$nameProperty] && $sessionPassw == $user[$passProperty]){
            return true;
        };
    };
};