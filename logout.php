<?php
    session_start();

    unset($_SESSION["login"]);
    header("location:index.php");
    //print_r($_SESSION);
?>