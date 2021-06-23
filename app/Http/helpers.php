<?php

if (!function_exists('returnCustom')) {
    function returnCustom($message, $status = false){
        return ['status' => $status, 'message' => $message ];
    }
}