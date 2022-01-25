<?php
// define('WEBROOT', dirname($_SERVER['SCRIPT_NAME']) . '/');
$directory = basename(dirname(dirname(__FILE__)));
$url = explode('$directory', $_SERVER['REQUEST_URI']);
if(count($url) == 1){
    define('WEBROOT', '/');
}else{
    define('WEBROOT', $url[0] . 'Portfolio/');
}
