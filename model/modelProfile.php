<?php

function getUserInfos($name, $pdo) {
    $sql = "SELECT * FROM users JOIN auth ON id = idUser WHERE userName = :userName";
    $rqt = $pdo->prepare($sql);
    $rqt->execute([$name]);
    $result = $rqt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function getUserRoles($name, $pdo) {
    $sql = "SELECT * FROM roles JOIN roleuser ON id = idRole NATURAL JOIN auth WHERE userName = :userName";
    $rqt = $pdo->prepare($sql);
    $rqt->execute([$name]);
    $result = $rqt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function getNBUserRoles($name, $pdo) {
    $sql = "SELECT COUNT(*) FROM roles JOIN roleuser ON id = idRole NATURAL JOIN auth WHERE userName = :userName";
    $rqt = $pdo->prepare($sql);
    $rqt->execute([$name]);
    $result = $rqt->fetch(PDO::FETCH_ASSOC);
    return $result;
}