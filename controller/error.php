<?php

/** @var int $code Error code return by HTTP */
$code = $_GET["error"];
/** List of all possible error codes with their message, their images*/
$error = [
    404 => ["Page not found", "notFound.png"],
    204 => ["No resource returned", "noDB.png",
        "It seems that the server can't connect to the database. Make sure you're connected to internet and try to 
        refresh the page. If the problem persist, please contact an administrator with the form below !"],
];

require_once "../util/header.php";

require_once "../view/viewError.php";
require_once "../view/viewFormError.php";

require_once "../util/footer.php";