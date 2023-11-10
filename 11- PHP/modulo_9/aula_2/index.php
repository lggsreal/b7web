<?php
    $json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

    //var_dump(json_decode($json));
    var_dump(json_decode($json, true));

    $obj = json_decode($json);
    $arr = json_decode($json, true);
    echo $obj->a;

    $array = array('nome'=>'Gustavo', 'idade' => 20);
    $json = json_encode($array);
    echo $json;
?>