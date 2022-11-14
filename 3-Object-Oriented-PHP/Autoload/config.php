<?php

    function myAutoload($class){
        $class = str_replace('\\','/',$class);
        if  (file_exists("classes/$class.php"))
            include "classes/$class.php";
    }


    // myAutoload(Utilidades);

    spl_autoload_register('myAutoload');