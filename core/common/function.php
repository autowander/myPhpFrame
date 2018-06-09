<?php
function var_p($var){
    if(is_bool($var)){
        var_dump($var);
    }elseif(is_null($var)){
        var_dump(null);
    }else{
        echo "<pre>";
        var_dump($var);
        echo "</pre>";
    }
}

function var_dp($var){
    var_p($var);
    die();
}

function var_d($var){
    var_p($var);
}