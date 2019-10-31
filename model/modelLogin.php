<?php

function AcountExist($id, $pdo) {
    $sql = "SELECT userName FROM auth WHERE userName = :id";
    $rqt = $pdo->prepare($sql);
    $rqt->execute([$id]);
    $result = $rqt->fetch(PDO::FETCH_ASSOC);
    if(isset($result['userName'])) {
        return true;
    }
    return false;
}

function CorrectPass($name,$pass,$pdo) {
    $sql = "SELECT pass FROM auth WHERE userName = :userName";
    $rqt = $pdo->prepare($sql);
    $rqt->execute([$name]);
    $result = $rqt->fetch(PDO::FETCH_ASSOC);
    if(isset($result['pass'])) {
        if ($result['pass'] == $pass) {
            return true;
        }
    }
    return false;
}