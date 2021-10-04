<?php
$db = require (__DIR__."\\db.php");

$userLogin = $_POST['userLogin'];

$userPassword = $_POST['userPassword'];

//проверка логина и пароля

$loginTest = $db->prepare("SELECT Login, Password FROM userdata WHERE Login = :Login1 AND Password = :Password1");
$loginTest->bindParam(':Login1', $userLogin);
$loginTest->bindParam(':Password1', $userPassword);
$loginTest->execute();
$ardata = $loginTest->fetchAll();
    if(count($ardata) != 1 || $ardata[0][0] != $userLogin || $ardata[0][1] != $userPassword){
        header("Location: authorization.php");
        die;
    }elseif ($userLogin == "admin"){
        header("Location: update.php");
        die;
    }else{
        echo 'You are on-line';
    }
