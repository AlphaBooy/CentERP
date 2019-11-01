<div class="navbar navbar-dark navbar-expand bg-gradient-darker" id="myNavbar">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="../index.php" alt="Get to the home page"><i class="ni ni-planet"></i> The Center</a>
    <ul class="nav ml-auto">
        <?php
        if (isset($_SESSION['id'])) { ?>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><i class="ni ni-compass-04"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="projects.php"><i class="ni ni-spaceship"></i> Projects</a>
                    <a class="dropdown-item" href="#"><i class="ni ni-calendar-grid-58"></i> Schedule</a>
                    <a class="dropdown-item" href="#"><i class="ni ni-badge"></i> Teams</a>
                    <a class="dropdown-item" href="#"><i class="ni ni-bell-55"></i> Notifications</a>
                    <a class="dropdown-item" href="#"><i class="ni ni-settings-gear-65"></i> Settings</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="profile.php" class="nav-link">My Profile <i class="ni ni-single-02"></i></a>
            </li>
            <li class="nav-item align-content-right">
                <a href="logout.php" class="nav-link">Log Out <i class="ni ni-button-power"></i></a>
            </li>
        <?php } else { ?>
            <li class="nav-item text-right">
                <a href="login.php" class="nav-link">Log In <i class="ni ni-circle-08"></i></a>
            </li>
            <li class="nav-item text-right">
                <a href="register.php" class="nav-link">Register <i class="ni ni-book-bookmark"></i></a>
            </li>
        <?php } ?>
    </ul>
</div>