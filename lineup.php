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
            <img src="soad-logo.png" alt="System of a Down">
            </a>
        </div>
        <div class="row align-items-center">
            <div class="col-6">
                <a href="ghost.php">
                <img src="ghost-logo.png" alt="Ghost" style="width: 50%">
                </a>
            </div>
            <div class="col-6">
                <a href="avatar.php">
                <img src="avatar-logo.png" alt="Avatar" style="width: 50%">
                </a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-4">
                <a href="ink.php">
                <img src="ink-logo.png" alt="Ice Nine Kills" style="width: 50%">
                </a>
            </div>
            <div class="col-4">
                <a href="miw.php">
                <img src="miw-logo.png" alt="Motionless in White" style="width: 50%">
                </a>
            </div>
            <div class="col-4">
                <a href="etf.php">
                <img src="etf-logo.png" alt="Escape the Fate" style="width: 50%">
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap links -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
