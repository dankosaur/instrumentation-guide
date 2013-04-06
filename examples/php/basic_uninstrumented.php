<?php

function do_stuff($param) {
    /* do something potentially expensive */
    return `sleep 1; echo $param; sleep 1`;
}

print do_stuff("asdf");

?>
