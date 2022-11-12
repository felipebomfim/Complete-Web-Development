<?php
    $arr = array('<h1>Felipe</h1>', '<h2>dos</h2>','<a href="#">Santos</a>');

    // print_r($arr);
    print_r(array_map('strip_tags',$arr));
?>