<?php
session_start();
if(isset($_SESSION["loginok"])){
    if ($_SESSION["loginok"]!=1){
        echo ("<script>location.href='login.php';</script>");
    }
}

else{
    echo ("<script>location.href='login.php';</script>");
}

?>