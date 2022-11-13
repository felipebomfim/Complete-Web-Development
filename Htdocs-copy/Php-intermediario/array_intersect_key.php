<?php
    $array1 = array("cor"=>"vermelho",2,4);

    $array2 = array("a","b","cor"=>"verde", "forma"=>"trapezoide",4);

    $result = array_intersect_key($array1,$array2);

    echo "<pre>";
    print_r($result);
    echo "</pre>";
?>