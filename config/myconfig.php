<?php

return [
    'devUrl' => env('DEV_URL', 'http://locahost/ipaymu-training/administrator'), 
    'assetsUrl' => env('ASSETS_URL', 'http://locahost/ipaymu-training/public'),
    'adminUrl' => 'administrator', // 'bar' is default if MY_VALUE is missing in .env
    'limitData' => 10, 
    'limitProduct' => 6, 
];

?>