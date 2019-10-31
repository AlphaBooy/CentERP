<?php
$details = getProjectById($_GET["details"],$pdo);

//var_dump($details);

if (!isset($_SESSION['id'])) {
    ?>
    <div class="container">
        <div class="alert alert-warning">
            <h2 class="text-center alert-heading text-danger">WARNING</h2>
            <br/>
            <p class="text-center">You're not logged in. To reach this page, please <a href="login.php">log in</a></p>
            <p class="text-center text-black-50">
                If you think you're not supposed to see this message, please
                <a href="contact.php">contact an administrator</a> !
            </p>
        </div>
    </div>
    <?php
} elseif (!userIsInProject($_SESSION['id'], $_GET["details"], $pdo)) {
?>
<div class="container">
    <div class="alert alert-warning">
        <h2 class="text-center alert-heading text-danger">WARNING</h2>
        <br/>
        <p class="text-center">You're not assigned to this project !</p>
        <p class="text-center text-black-50">
            If you think you're not supposed to see this message, please
            <a href="contact.php">contact an administrator</a> !
        </p>
    </div>
</div>
<?php
} else {
    //All good
}