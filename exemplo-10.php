<?php

function test($caLLback){

    //processo lento

    $caLLback();

}


test(function(){
    echo "terminou";
});


?>