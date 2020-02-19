<?php
function validateinput($str)
{
    return stripslashes(htmlspecialchars(trim($str)));
}
function comparepwd($pwd1,$pwd2)
{
    if ($pwd1 === $pwd2){
        return true;

    }
    return false;
   
}
