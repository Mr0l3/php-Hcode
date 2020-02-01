<?php

if(isset($_COOKIE['cookie-name'])){
    $data = json_decode($_COOKIE['cookie-name']);

    echo "Cookie value: " . $data->cookie_value;
}
