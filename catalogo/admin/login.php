<?php
    session_start();

    if (isset($_POST["Email"]) && isset($_POST["Senha"])){

        if ($_POST["Email"] == "sdideus@gmail.com"
            && $_POST["Senha"] == "123") {
        
            $_SESSION["usuario"] = $_POST["Email"];

            header("Location: dashboard.php");
            exit();
        }
    }

    header("Location: index.php");
?>