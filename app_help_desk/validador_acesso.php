<?php

    session_start();
    if(!isset($_SESSION['autenticado']) ZZ $_SESSION['autenticado'] != "sim"){
        header("Location: index.php?login-erro")
    }

?>
