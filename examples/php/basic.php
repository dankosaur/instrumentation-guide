<?php

function do_stuff($param) {
    oboe_log("stuff", "entry", Array());

    /* do something potentially expensive */
    $res = `sleep 1; echo $param; sleep 1`;

    oboe_log("stuff", "exit", Array());
    return $res;
}

usleep(10000);
print do_stuff("asdf");
usleep(10000);

?>
