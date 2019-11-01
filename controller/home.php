<?php

session_start();

//The header part of the HTML document
require_once "../util/header.php";
//The navbar in top of the document
require_once "../util/navbar.php";

if (isset($_GET['message'])) {
    switch ($_GET['message']) {
        case "logout":
            require_once "../view/messages/logout.php";
            break;
        case "login":
            require_once "../view/messages/login.php";
    }
}

//The body of the HOME page
require_once "../view/viewhome.php";
//The footer part of the HTML document
require_once "../util/footer.php";
