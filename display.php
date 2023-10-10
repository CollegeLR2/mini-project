<!DOCTYPE html>
<html lang="en">

<!-- adds the information in <head> and changes the title of the page  -->
<?php
$pageTitle = "Results";
include_once 'head.php';
?>

<body>
    <h1 class="title">You have submitted the following email:</h1>

    <?php

    // loops over any POST variables sent
    foreach ($_POST as $key => $value) {
        echo "<p class='section'>";
        echo "{$key} = {$value}";
        echo "</p>";
    }

    ?>
    
</body>
<footer>
    <a href="index.php">Home</a>
</footer>
</html>
