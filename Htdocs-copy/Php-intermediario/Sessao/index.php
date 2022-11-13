<?php
    session_start();
    $_SESSION['nome'] = 'Felipe';

    // unset($_SESSION['nome']);
    session_destroy();
?>