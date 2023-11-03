<!DOCTYPE html>
<html lang="en">

<!-- adds the information in <head> and changes the title of the page  -->
<?php
$pageTitle = "Lineup";
include_once 'head.php';
?>

<body>
    <!-- Includes the navbar  -->
    <?php include_once "navbar.php"; ?>

    <div>
        <h1 class="title">Lineup</h1>
    </div>

    <div class="section" style="width: 66%; margin: auto;">
        <div class="col-12" style="margin: auto;">
            <a href="soad.php">
            <img src="soad-logo.png" alt="System of a Down" style="width: 60%">
            </a>
        </div>
        <div class="row align-items-center">
            <div class="col-6">
                <a href="ghost.php">
                <img src="ghost-logo.png" alt="Ghost" style="width: 80%">
                </a>
            </div>
            <div class="col-6">
                <a href="avatar.php">
                <img src="avatar-logo.png" alt="Avatar" style="width: 80%">
                </a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4">
                <a href="ink.php">
                <img src="ink-logo.png" alt="Ice Nine Kills" style="width: 100%">
                </a>
            </div>
            <div class="col-4">
                <a href="miw.php">
                <img src="miw-logo.png" alt="Motionless in White" style="width: 100%">
                </a>
            </div>
            <div class="col-4">
                <a href="etf.php">
                <img src="etf-logo.png" alt="Escape the Fate" style="width: 100%">
                </a>
            </div>
        </div>
    </div>
    </body>
</html>
