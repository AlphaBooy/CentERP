<div class="navbar navbar-dark navbar-expand bg-dark" id="myNavbar">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="../index.php" alt="Get to the home page">The Center</a>
    <ul class="nav">
        <li class="nav-item">
            <a href="projects.php" alt="Look at the projects information such as the schedule, the licences or
                                                                            documentation" class="nav-link">Projects</a>
        </li>
        <li class="nav-item">
            <a href="schedule.php" alt="Look at your personal schedule, the task that have been assigned
                                            by a manager and the event within the company" class="nav-link">Schedule</a>
        </li>
        <?php
        if (isset($_SESSION['id'])) { ?>
            <li class="nav-item">
                <a href="profile.php" alt="Look and modify your personal data" class="nav-link">My Profile</a>
            </li>
            <li class="nav-item align-content-right">
                <a href="logout.php" alt="Log Out" class="nav-link">Log Out</a>
            </li>
        <?php } else { ?>
            <li class="nav-item text-right">
                <a href="login.php" alt="Log in to your account so you can join a team and get involve into projects
                                                                  and manage your schedules" class="nav-link">Log In</a>
            </li>
            <li class="nav-item text-right">
                <a href="register.php" alt="Create an account so you can use every functionality of this site"
                                                                                           class="nav-link">Register</a>
            </li>
        <?php } ?>
    </ul>
</div>