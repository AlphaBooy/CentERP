<?php
/**
 * This page is called when the site is launched.
 * The first call of the index will be without any argument, so it'll display the home page in a basic VForms.
 */

if (false) {
    //TODO create redirections for every arguments
} else {
    //No argument, the home page is display normally
    header("Location: controller/home.php");
}

