<?php
    session_start();
    setcookie('nome','Felipe',time()-60*60*24,'/');

    echo $_COOKIE['nome'];
?>