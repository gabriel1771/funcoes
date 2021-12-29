<?php

function ola(){

    $argumentos = func_get_args();

    return $argumentos;
}

var_dump(ola("Bom dia!", 24, NULL, 1.1, true))

?>