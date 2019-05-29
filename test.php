<?php

echo get_vistor_ip();

function get_vistor_ip()
{
    $ip = '';
    if ($_SERVER['HTTP_CLIENT_IP']) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif ($_SERVER['HTTP_X_FORWARDED_FOR']) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif ($_SERVER['HTTP_X_FORWARDED']) {
        $ip = $_SERVER['HTTP_X_FORWARDED'];
    } elseif ($_SERVER['HTTP_FORWARDED_FOR']) {
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif ($_SERVER['HTTP_FORWARDED']) {
        $ip = $_SERVER['HTTP_FORWARDED'];
    } elseif ($_SERVER['REMOTE_ADDR']) {
        $ip = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip = 'none';
    }

    return $ip;
}
