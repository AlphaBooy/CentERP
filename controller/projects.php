<?php

session_start();

//Get the pdo connection the database
require_once "../util/db.php";
$pdo = getPDO();

//All the functions that access the database
require_once "../model/modelProjects.php";

//An array of all projects (only name description and image
$tabProjects = getAllProjects($pdo);

//The header part of the HTML document
require_once "../util/header.php";
//The navbar in top of the document
require_once "../util/navbar.php";
if (isset($_GET["details"])) {
    require_once "projects/details.php";
} else {
    //The body of the project page
    require_once "../view/viewProjects.php";
}
//The footer part of the HTML document
require_once "../util/footer.php";
