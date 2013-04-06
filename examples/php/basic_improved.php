<?php

function oboe_log_safe($layer, $label, $kvs=Array()) {
    if (function_exists("oboe_log")) {
        oboe_log($layer, $label, $kvs);
    }
}

function do_stuff($param) {
    oboe_log_safe("stuff", "entry");

    /* do something potentially expensive */
    $res = `sleep 1; echo $param; sleep 1`;

    oboe_log_safe("stuff", "exit");
    return $res;
}

print do_stuff("asdf");

?>
