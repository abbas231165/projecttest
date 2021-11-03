<?php


function view($filename, $items = [])
{

    foreach ($items as $key => $value) {
        $$key = $value;
    }

    require_once '/xampp2/htdocs/test/src/inc/' . $filename . '.php';
}

function is_method_request_post()
{
    return strtoupper($_SERVER["REQUEST_METHOD"]) === 'POST';
}