<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function asset_url() {
    return base_url() . 'assets/';
}

function db_date($date_string) {
    $format = 'Y-m-d H:i:s';
    return date($format, strtotime($date_string));
}

function user_date($date_string) {
    $CI_Instance = & get_instance();
    if ($CI_Instance->config->item('date_time_format', 'global_settings'))
        $format = $CI_Instance->config->item('date_time_format', 'global_settings');
    else
        $format = 'm/d/Y H:i:s';
    return date($format, strtotime($date_string));
}

?>