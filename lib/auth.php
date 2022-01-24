<?php
session_start();
if(!isset($auth)){
    if(!isset($_SESSION['Auth']['id'])){
    header('Location:' . WEBROOT . 'login.php');
    die();
    }
}


if(!isset($_SESSION['csrf'])){
    $_SESSION['crsf'] = md5(time() + rand());
}

function csrf(){
    return 'csrf=' . $_SESSION['csrf'];
}

function checkCsrf(){
    if(!isset($_GET['csrf']) || $_GET['csrf'] != $_SESSION['csrf']){
        header('Location:' . WEBROOT . 'csrf.php');
        die();
    }

}
?>