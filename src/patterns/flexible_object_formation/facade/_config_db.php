<?php

const CONFIG = [
    'bd' => 'mysql',
    'host' => '127.0.0.1',
    'user' => 'root',
    'password' => '1'
];


function get_config()
{
    return CONFIG;
}

function set_array_config($config, $changed)
{
    foreach ($changed as $key => $value) {
        $config[$key] = $value;
    }

    return $config;
}

function delete_array_config($config, $changed)
{
    foreach ($changed as $key => $value) {
        if (array_key_exists($key, $config)) {
            unset($config[$key]);
        }
    }

    return $config;
}
