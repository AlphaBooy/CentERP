<?php
require_once "../util/db.php";
$pdo = getPDO();

require_once "../model/modelLogin.php";

//The language of this page
require_once "../public/lang/langLogin.php";
//The header part of the HTML document
require_once "../util/header.php";
//The navbar in top of the document
require_once "../util/navbar.php";
//The body of the HOME page
require_once "../view/viewlogin.php";
//The footer part of the HTML document
require_once "../util/footer.php";

if (isset($_POST["name"]) && isset($_POST["pass"])) {
    if (AcountExist($_POST["name"],$pdo)) {
        if (CorrectPass($_POST["name"],$_POST["pass"],$pdo)) {
            header("Location: home.php");
        }
    }
}