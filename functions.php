<?php

function print_error_msg($msg){

    echo"<span style='color: red;'>$msg</span>";

    unset($_SESSION['err_msg']);
      
}

function print_success_msg($msg){
    echo"<span style='color: green;'>$msg</span>";
    unset($_SESSION['msg']);
}

function set_err_msg($msg){
            $_SESSION['err_msg'] = $msg;
}

function set_msg($msg){
    $_SESSION['msg'] = $msg;
}

