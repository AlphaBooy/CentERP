<?php

//The header part of the HTML document
require_once "../util/header.php";
//The navbar in top of the document
require_once "../util/navbar.php";
?>
<div class="container bg-transparent shadow-none">
    <img class="img-fluid" src=<?="../public/images/error/" .  $_GET["code"] . ".png" ;?>>
    <br/><br/>
    <a href="../index.php">
        <button class="btn btn-block btn-icon-label btn-outline-primary w-25 mx-auto">
            <i class="ni ni-planet"></i> Back to home
        </button>
    </a>
</div>
<?php
//The footer part of the HTML document
require_once "../util/footer.php";