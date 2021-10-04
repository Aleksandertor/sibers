<?php
$db = require (__DIR__."\\db.php");

$userLogin = $_POST['userLogin'];

//проверка уникальности логина

$loginTest = $db->prepare("SELECT Login FROM userdata WHERE Login = :Login1");
$loginTest->bindParam(':Login1', $userLogin);
$loginTest->execute();
$ardata = $loginTest->fetchAll();
if(count($ardata) > 0){
    header("Location: registration_not_unique_login.php");
die;
}

$userPassword = $_POST['userPassword'];
$userName = $_POST['userName'];
$userSurname = $_POST['userSurname'];
$sex = $_POST['sex'];
$dateOfBirth = $_POST['dateOfBirth'];

$db = require (__DIR__.DIRECTORY_SEPARATOR."db.php");

$theValues = $db->prepare("INSERT INTO userdata(Login, Password, First_name, Surname, Sex, Date_of_birth) VALUES (:Login, :Password, :First_name, :Surname, :Sex, :Date_of_birth)");

$theValues->bindParam(':Login', $userLogin);
$theValues->bindParam(':Password', $userPassword);
$theValues->bindParam(':First_name', $userName);
$theValues->bindParam(':Surname', $userSurname);
$theValues->bindParam(':Sex', $sex);
$theValues->bindParam(':Date_of_birth', $dateOfBirth);

if ($theValues->execute()) {
    header("Location: authorization.php");
} else {
    echo 'Error, try again';
};

