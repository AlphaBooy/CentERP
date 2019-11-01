<?php

require_once "../util/db.php";
$pdo = getPDO();
require_once "../model/modelLogin.php";

if (isset($_POST["name"]) && isset($_POST["pass"]) && !isset($_SESSION['id'])) {
    if (AcountExist($_POST["name"],$pdo)) {
        if (CorrectPass($_POST["name"],$_POST["pass"],$pdo)) {
            session_start();
            $_SESSION['id'] = session_id();
            $_SESSION['name'] = $_POST["name"];
        }
    }
}

session_start();
if (isset($_SESSION['id'])) {
    header("Location: home.php?message=login");
}

//The header part of the HTML document
require_once "../util/header.php";
//The navbar in top of the document
require_once "../util/navbar.php";
//The body of the login page
require_once "../view/viewlogin.php";
//The footer part of the HTML document
require_once "../util/footer.php";