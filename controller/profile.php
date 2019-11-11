<?php

session_start();

require_once "../util/db.php";
$pdo = getPDO();

require_once "../model/modelProfile.php";

$userInfos = getUserInfos($_SESSION['name'], $pdo);
$userRoles = getUserRoles($_SESSION['name'], $pdo);
$NBuserRoles = getNBUserRoles($_SESSION['name'], $pdo);

//The header part of the HTML document
require_once "../util/header.php";
//The navbar in top of the document
require_once "../util/navbar.php";
//The body of the login page
require_once "../view/viewprofile.php";
//The footer part of the HTML document
require_once "../util/footer.php";