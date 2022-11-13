<?php
    // $data = '20/05/1993 19:00:00';
    date_default_timezone_set("America/Recife");
    $data = date('d/m/Y H:i:s',time()+(60*10));
    echo $data;

?>