<?php
$db = require (__DIR__.DIRECTORY_SEPARATOR."db.php");
$counterOfItems = 1;
while ($counterOfItems <= intval($_POST['count'])) {
    $data = [
        'Login' => $_POST['userLogin'.$counterOfItems],
        'First_name' => $_POST['userName'.$counterOfItems],
        'Surname' => $_POST['userSurname'.$counterOfItems],
        'Sex' => $_POST['sex'.$counterOfItems],
        'Date_of_birth' => $_POST['dateOfBirth'.$counterOfItems],
        'id' => $counterOfItems,
    ];
    $sql = "UPDATE userdata SET Login=:Login, First_name=:First_name, Surname=:Surname, Sex=:Sex, Date_of_birth=:Date_of_birth WHERE id=:id";
    $stmt= $db->prepare($sql);
    $stmt->execute($data);
    $counterOfItems++;
}
header("Location: list.php");
exit;