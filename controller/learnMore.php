<?php

//The header part of the HTML document
require_once "../util/header.php";
//The navbar in top of the document
require_once "../util/navbar.php";
require_once "../view/learnMore/". $_GET['page'] .".php";
//The footer part of the HTML document
require_once "../util/footer.php";