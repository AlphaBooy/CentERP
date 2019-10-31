<?php
/**
 * Display a view of all projects (default view)
 * Call a fonction stored in model/project.php witch get all elements from
 * the database to display them here
 */
?>

<div class="container">
    <?php
    foreach ($tabProjects as $project) {
        ?>
        <div class="card">
            <div class="card-header bg-dark text-center text-primary">
                <h1 class="h3 card-title"><?= $project["name"]." #". $project["id"];?></h1>
            </div>
            <div class="card-body row">
                <img class="card-img col-3 img-fluid" src=<?= $project["image"] ;?> alt="Project image"/>
                <p class="col-6 card-text text-primary text-justify"><?= $project["description"] ;?></p>
                <div class="col-3">
                    <a class="btn btn-block" href=<?="projects.php?details=" . $project["id"];?>>
                        <button class="btn btn-block btn-dark" id="btn_details">Details</button>
                    </a>
                    <a class="btn btn-block" href=<?= "projects.php?modify=" . $project["id"];?>>
                        <button class="btn btn-block btn-dark" id="btn_modify">Modify</button>
                    </a>
                    <a class="btn btn-block" href="#">
                        <button class="btn btn-block btn-dark" id="btn_modify">Coming soon</button>
                    </a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>